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
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Formations</h2>
                <!-- <button>Add Formation</button> -->
                <!-- :href="route('formations.create')" -->
                <div>
                    <Link class="px-2" :href="route('formation.create')"><button
                    class="bg-white rounded shadow py-2 px-3 border border-green-400 hover:bg-green-600 hover:text-white">
                    <i class="fas fa-plus text-green-400 px-1"></i>
                    Formation</button></Link>
                    <Link class="px-2"><button
                    class="bg-white rounded shadow py-2 px-3 border border-green-400 hover:bg-green-600 hover:text-white">
                    <i class="fas fa-plus text-green-400 px-1"></i>
                    Upload CV</button></Link>
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <i class="fas fa-graduation-cap text-slate-600 px-1 fa-2x"></i>
                        Liste des formations

                    </div>


                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded px-4">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nom
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ecole Formation
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Diplome
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Duree
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-if="formations.length > 0">
                                    <tr v-for="formation in formations" :key="formation.id"
                                        class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ formation.nom }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ formation.ecole }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ formation.diplome }} {{ formation.libelle }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ formation.debut_formation }} - {{ formation.fin_formation }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <Link :href="route('formation.edit', formation.id)">
                                                <i class="fas fa-edit text-orange-400 px-1"></i>
                                            </Link>
                                        </td>
                                    </tr>
                                </template>
                                <tr v-else>
                                    <td colspan="4" class="px-4 py-4">Pas de Formation Inscrite</td>
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
        formations: Array
    }
}

</script>