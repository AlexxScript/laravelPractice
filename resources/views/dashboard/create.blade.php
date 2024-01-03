@extends('dashboard.main')

@section('dashboardMain')

    <form action="/dashboard/create" id="myForm" method="POST">
        @csrf
        <input type="hidden" name="content">
        <div id="editor"></div>
        <button class="btnSave" type="submit">Save</button>
    </form>
    
    <script>
        let form = document.getElementById('myForm');
        let btn = document.querySelector('.btnSave');
        var quill = new Quill('#editor', {
            placeholder:'Start writing your things here...',
            theme: 'snow'
        });

        // Function to update the hidden input field with Quill content
        function updateHiddenInput() {
            var inputH = document.querySelector('input[name=content]');
            inputH.value = JSON.stringify(quill.getContents());
        }

        // Initialize MutationObserver to track changes in the Quill editor
        var observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'childList' || mutation.type === 'characterData') {
                    updateHiddenInput();
                }
            });
        });

        // Observe changes in the Quill editor
        observer.observe(document.querySelector('#editor'), {
            attributes: true,
            childList: true,
            subtree: true,
            characterData: true
        });

        // Handle form submission
        form.onsubmit = function (event) {
            event.preventDefault();
            updateHiddenInput(); // Update one last time before submitting
            console.log(form.content.value); // Output the content to console (for testing)
            // Submit form or process the content further
            form.submit();
        }
    </script>
@endsection
