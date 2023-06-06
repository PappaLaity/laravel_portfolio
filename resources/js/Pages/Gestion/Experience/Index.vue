<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Experiences</h2>
                <!-- <button>Add Formation</button> -->
                <!-- :href="route('formations.create')" -->
                <div>
                    <Link class="px-2" :href="route('experience.create')"><button
                        class="bg-white rounded shadow py-2 px-3 border border-green-400 hover:bg-green-600 hover:text-white">
                        <i class="fas fa-plus text-green-400 px-1"></i>
                        Experience</button></Link>
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <i class="fas fa-briefcase-clock text-slate-600 px-1 fa-2x"></i>
                        Experiences

                    </div>


                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded px-4">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Poste
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Entreprise
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Type de Contrat
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Duree
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Outils
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-if="experiences.length > 0">
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
                                            {{ experience.outils }} - {{ experience.environnement }}
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
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


<script>
export default {
    components: {
        Link
    },
    props: {
        experiences: Array
    }
}

</script>