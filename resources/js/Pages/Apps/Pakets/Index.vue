<template>
    <Head>
        <title>
            Master Paket - Sumber Mulya Laundry POS V.2
        </title>
    </Head>
    <main class="c-main">
        <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 rounded-3 shadow border-top-purple">
                            <div class="card-header">
                                <span class="font-weight-bold"><i class="fa fa-shopping-bag"></i> PAKETS</span>
                            </div>
                            <div class="card-body">
                                <form @submit.prevent="handleSearch">
                                    <div class="input-group mb-3">
                                        <Link href="/apps/pakets/create" class="btn btn-primary input-group-text"> <i class="fa fa-plus-circle me-2"></i> NEW</Link>
                                        <input type="text" class="form-control" v-model="search" placeholder="search by product title...">

                                        <button class="btn btn-primary input-group-text" type="submit"> <i class="fa fa-search me-2"></i> SEARCH</button>

                                    </div>
                                </form>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Barcode</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Buy Price</th>
                                            <th scope="col">Sell Price</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col" style="width:20%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
												<Barcode
													:value="'P0001'"
													:format="'CODE39'"
													:lineColor="'#000'"
													:width="1"
													:height="20"
												/>
											</td>
                                            <td>Express/Kg</td>
                                            <td>Rp 20.000</td>
                                            <td>Rp 25.000</td>
                                            <td>99999</td>
                                            <td class="text-center">
                                                <Link :href="`/apps/products/1/edit`" class="btn btn-success btn-sm me-2"><i class="fa fa-pencil-alt me-1"></i> EDIT</Link>
                                                <button  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> DELETE</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <Pagination  align="end"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</template>

<script>
    import {Head, Link} from '@inertiajs/vue3';
    // import layout
    import LayoutApp from '../../../Layouts/App.vue';

    // import component pagination
    import Pagination from '../../../Components/Pagination.vue';

    // import ref from vue
	import { ref } from 'vue';

    // import sweetalert2
	import Swal from 'sweetalert2';

    // import component barcode
    import Barcode from '../../../Components/Barcode.vue';

    export default {
        layout : LayoutApp,
        // register components
        components: {
            Head,
            Link,
            Pagination,
			Barcode
        },
    }

</script>
