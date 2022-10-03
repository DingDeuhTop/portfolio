<script setup>
import Projects from './Projects.vue';
defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <section
        id="portfolio"
        class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]"
    >
        <div class="container mx-auto">
            <div class="flex flex-col item-center text-center">
                <h2 class="section-title">My latest work</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Laborum, labore iusto perferendis nesciunt maxime expedita
                    veritatis aut tempora eius, maiores, aperiam veniam illum
                    dolor? Vel ex exercitationem eveniet voluptates sint.
                </p>
            </div>
        </div>
        <Projects :skills="skills" :projects="projects" />
    </section>
</template>
