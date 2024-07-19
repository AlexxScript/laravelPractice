<template>
    <main>
        <header>
            <Nav/>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>

<script setup>
import Nav from '../components/Nav.vue';
</script>

<style scoped>
article{
    max-width: 75%;
    width: 100%;
    margin: 0 auto;
}
</style>