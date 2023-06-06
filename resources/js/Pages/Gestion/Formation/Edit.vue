<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    errors: Object,
    formation: Object

});

const form = useForm({
    id: props.formation.id,
    nom: props.formation.nom,
    libelle: props.formation.libelle,
    description: props.formation.description,
    diplome: props.formation.diplome,
    ecole: props.formation.ecole,
    debut_formation: props.formation.debut_formation,
    fin_formation: props.formation.fin_formation,
    statut: true
});

const update = () => {
    form.put(route('formation.update', form.id));
}
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Formations</h2>
                <!-- <button>Add Formation</button> -->
                <!-- :href="route('formations.create')" -->
                <Link class="px-2" :href="route('formation.index')"><button
                    class="bg-white rounded shadow py-2 px-3 border border-green-400 hover:bg-green-600 hover:text-white">
                    <i class="fas fa-list text-green-400 px-1"></i>
                    Formations</button></Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Mofication formation</div>
                </div>
                <div class="bg-white px-4 py-4 flex justify-center">
                    <form @submit.prevent="update" class="w-3/4">
                        <div>
                            <InputLabel for="nom" value="Nom Formation" />

                            <TextInput id="nom" type="text" class="mt-1 block w-full" v-model="form.nom" required autofocus
                                autocomplete="nom" />

                            <InputError class="mt-2" :message="form.errors.nom" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="libelle" value="Libelle Formation" />

                            <TextInput id="libelle" type="text" class="mt-1 block w-full" v-model="form.libelle" required
                                autocomplete="libelle" />

                            <InputError class="mt-2" :message="form.errors.libelle" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="diplome" value="Diplome" />

                            <TextInput id="diplome" type="text" class="mt-1 block w-full" v-model="form.diplome" required
                                autocomplete="diplome" />

                            <InputError class="mt-2" :message="form.errors.diplome" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="ecole" value="Ecole de Formation" />

                            <TextInput id="ecole" type="text" class="mt-1 block w-full" v-model="form.ecole" required
                                autocomplete="ecole" />

                            <InputError class="mt-2" :message="form.errors.ecole" />
                        </div>

                        <div class="mt-4 grid grid-cols-2 gap-3">
                            <div class="">
                                <InputLabel for="debut_formation" value="Debut Formation" />

                                <TextInput id="debut_formation" type="text" class="mt-1 block w-full"
                                    v-model="form.debut_formation" required autocomplete="debut_formation" />

                                <InputError class="mt-2" :message="form.errors.debut_formation" />
                            </div>
                            <div class="">
                                <InputLabel for="fin_formation" value="Fin Formation" />

                                <TextInput id="fin_formation" type="text" class="mt-1 block w-full"
                                    v-model="form.fin_formation" required autocomplete="fin_formation" />

                                <InputError class="mt-2" :message="form.errors.fin_formation" />
                            </div>
                        </div>

                        <div class="mt-4">
                            <InputLabel for="description" value="Description" />

                            <textarea class="mt-1 block w-full rounded" id="description" v-model="form.description" rows="5"
                                autofocus></textarea>

                            <InputError class="mt-2" :message="form.errors.description" />
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing">
                                Modifier Formation
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