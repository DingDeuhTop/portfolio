<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Frontend from "../Layouts/Frontend.vue";
import Hero from "../Components/Frontend/Hero.vue";
import Promote from "../Components/Frontend/Promote.vue";
import About from "../Components/Frontend/About.vue";
import Skills from "../Components/Frontend/Skill.vue";
import Portfolio from "../Components/Frontend/Protfolio.vue";
import Services from "../Components/Frontend/Services.vue";
import ContactMe from "../Components/Frontend/ContactMe.vue";

components: {
    Head, Link;
}
defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <Head title="Vue-inertia" />
    <Frontend>
        <!-- Hero primary -->
        <Hero />
        <!-- Promote tail-100 -->
        <Promote />
        <!-- About secondary -->
        <About />
        <!-- Skills tail-100 -->
        <Skills :skills="skills" />
        <!-- Portfolio primary -->
        <Portfolio :skills="skills" :projects="projects" />
        <!-- Services secondary -->
        <Services />
        <!-- Contact primary -->
        <ContactMe />
    </Frontend>
</template>
