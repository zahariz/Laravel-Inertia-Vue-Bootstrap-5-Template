<template>
  <Head>
    <title>Dashboard - Cashier App</title>
  </Head>
  <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
        <div class="row">
          <div class="col-md-8">
            <div class="card border-0 rounded-3 shadow border-top-purple">
              <div class="card-header">
                <span class="font-weight-bold">
                  <i class="fa fa-chart-bar"></i>
                  SALES CHART 7 DAYS
                </span>
              </div>
              <div class="card-body">Chartnya</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 rounded-3 shadow border-top-info mb-4">
              <div class="card-header">
                <span class="font-weight-bold"
                  ><i class="fa fa-chart-line"></i> SALES TODAY</span
                >
              </div>
              <div class="card-body">
                <strong>0</strong> SALES
                <hr />
                <h5 class="fw-bold">Rp. 0</h5>
              </div>
            </div>

            <div class="card border-0 rounded-3 shadow border-top-success">
              <div class="card-header">
                <span class="font-weight-bold"
                  ><i class="fa fa-chart-bar"></i> PROFITS TODAY</span
                >
              </div>
              <div class="card-body">
                <h5 class="fw-bold">Rp. 0</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import { Head } from "@inertiajs/vue3";
import LayoutApp from '../../../Layouts/App.vue';

export default {
    layout: LayoutApp,

    components: {
        Head
    }
}
</script>

<style>
</style>
