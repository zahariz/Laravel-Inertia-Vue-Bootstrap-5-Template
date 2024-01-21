<template>
    <Head>
        <title>
            Master Create Pakets - Sumber Mulya Laundry POS V.2 
        </title>
    </Head>
    <main class="c-main">
        <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 rounded-3 shadow border-top-purple">
                            <div class="card-header">
                                <span class="font-weight-bold"><i class="fa fa-shopping-bag"></i> ADD NEW PAKETS</span>
                            </div>
                            <div class="card-body">
                                <form @submit.prevent="submit">
                                    <div class="mb-3">
                                        <input class="form-control" type="file">
                                    </div>
                                    <!-- <div v-if="errors.image" class="alert alert-danger">
                                        {{ errors.image }}
                                    </div> -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="fw-bold">Barcode</label>
                                                <input type="text" class="form-control" placeholder="Barcode / Code Pakets">
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</template>

<script>
    import {Head, Link} from '@inertiajs/vue3'
    import LayoutApp from '../../../Layouts/App.vue';

    export default {
        layout: LayoutApp,
        components: {
            Head,
            Link
        }
    }
</script>