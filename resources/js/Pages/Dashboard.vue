<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    messages: Array

});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Liste des Contacts</div>
                </div>

                
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded px-4">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Identifiant
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Numero
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Mail
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Message
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <template v-if="experiences.length > 0">
                                    <tr v-for="experience in experiences" :key="experience.id"
                                        class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ experience.nom }}
                                        </th>
                                        <td class="px-6 py-4">
                                            <a :href="experience.lien_entreprise" target="_blank">{{ experience.entreprise
                                            }}</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ experience.contrat }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ experience.debut_experience }} - {{ experience.fin_experience }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <Link :href="route('experience.edit', experience.id)">
                                            <i class="fas fa-edit text-orange-400 px-1"></i>
                                            </Link>
                                        </td>
                                    </tr>
                                </template>
                                <tr v-else>
                                    <td colspan="4" class="px-4 py-4">Pas d'Experiences</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>