<template>
    <div>
        <div class="container-fluid">
            <div class="row d-flex  justify-content-center align-items-center flex-column peto">
                <div>
                        <button type="button"
                                class="btn btnStyle btn-primary  text-white btn-block my-5 font-weight-bold text-dark"
                                @click.prevent="showTest=true"
                               >
                            Start
                        </button>
                        <button type="button"
                                @click.prevent="showStatics=true"
                                class="btn btnStyle btn-primary  text-white btn-block my-5 font-weight-bold text-dark"
                        >
                            Static
                        </button>
                        <button type="button"
                                @click.prevent="showHistory=true"
                                class="btn btnStyle btn-primary  text-white btn-block my-5 font-weight-bold text-dark"
                               >
                           History
                        </button>
                </div>

            </div>

        </div>
        <test
            v-if="showTest"
            :show-modal="showTest"
            @closeModal="showTest=false">
        </test>
        <statics
            v-if="showStatics"
            :show-statics-modal="showStatics"
            @closeModal="showStatics=false">
        </statics>
        <history
            v-if="showHistory"
            :show-history="showHistory"
            @closeModal="showHistory=false">
        </history>
    </div>
</template>
<script>
import Test from './modals/test.vue'
import Statics from './modals/statics.vue'
import History  from "./modals/History.vue";
export default {
    name: "Home",
    data() {
        return {
            showTest: false,
            showStatics: false,
            showHistory:false,
        }
    },
    components: {
        Test,
        History,
        Statics
    }
}
</script>
<style>
.peto {
    height: 100vh;
}

.btnStyle {
    border-radius: 50px;
}
</style>
