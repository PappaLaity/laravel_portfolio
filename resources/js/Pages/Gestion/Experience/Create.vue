<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    nom: '',
    entreprise: '',
    lien_entreprise: '',
    contrat: '',
    outils: '',
    environnement: '',
    debut_experience: '',
    fin_experience: '',
    statut: true
});

const submit = () => {
    form.post(route('experience.store'));
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Experiences</h2>
                <!-- <button>Add Formation</button> -->
                <!-- :href="route('formations.create')" -->
                <Link class="px-2" :href="route('experience.index')"><button
                    class="bg-white rounded shadow py-2 px-3 border border-green-400 hover:bg-green-600 hover:text-white">
                    <i class="fas fa-list text-green-400 px-1"></i>
                    Experiences</button></Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Nouveau Experience</div>
                </div>
                <div class="bg-white px-4 py-4 flex justify-center">
                    <form @submit.prevent="submit" class="w-3/4">
                        <div>
                            <InputLabel for="nom" value="Nom Poste" />

                            <TextInput id="nom" type="text" class="mt-1 block w-full" v-model="form.nom" required autofocus
                                autocomplete="nom" />

                            <InputError class="mt-2" :message="form.errors.nom" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="entreprise" value="Nom Entreprise" />

                            <TextInput id="entreprise" type="text" class="mt-1 block w-full" v-model="form.entreprise" required
                                autocomplete="entreprise" />

                            <InputError class="mt-2" :message="form.errors.entreprise" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="lien_entreprise" value="site de L'entreprise" />

                            <TextInput id="lien_entreprise" type="text" class="mt-1 block w-full" v-model="form.lien_entreprise" required
                                autocomplete="lien_entreprise" />

                            <InputError class="mt-2" :message="form.errors.lien_entreprise" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="contrat" value="Type de Contrat" />

                            <TextInput id="contrat" type="text" class="mt-1 block w-full" v-model="form.contrat" required
                                autocomplete="contrat" />

                            <InputError class="mt-2" :message="form.errors.contrat" />
                        </div>

                        <div class="mt-4 grid grid-cols-2 gap-3">
                            <div class="">
                                <InputLabel for="outils" value="Outils" />

                                <TextInput id="outils" type="text" class="mt-1 block w-full"
                                    v-model="form.outils" required autocomplete="outils" />

                                <InputError class="mt-2" :message="form.errors.outils" />
                            </div>
                            <div class="">
                                <InputLabel for="environnement" value="Environnement de Travail" />

                                <TextInput id="environnement" type="text" class="mt-1 block w-full"
                                    v-model="form.environnement" required autocomplete="environnement" />

                                <InputError class="mt-2" :message="form.errors.environnement" />
                            </div>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-3">
                            <div class="">
                                <InputLabel for="debut_experience" value="Debut Emploi" />

                                <TextInput id="debut_experience" type="text" class="mt-1 block w-full"
                                    v-model="form.debut_experience" required autocomplete="debut_experience" />

                                <InputError class="mt-2" :message="form.errors.debut_experience" />
                            </div>
                            <div class="">
                                <InputLabel for="fin_experience" value="Fin Emploi" />

                                <TextInput id="fin_experience" type="text" class="mt-1 block w-full"
                                    v-model="form.fin_experience" required autocomplete="fin_experience" />

                                <InputError class="mt-2" :message="form.errors.fin_experience" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing">
                                Ajouter Experience
                            </PrimaryButton>
                        </div>
                    </form>
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
    }
}

</script>