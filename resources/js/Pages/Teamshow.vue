<template>
    <div>
        <img :src="`./image/5.png`" class=" mr-3 w-100" alt="..." />

        <div class=" mt-3">
            <p class="text-white bg-info d-inline-block w-100 p-2 h5 ">
                Choose the team you like
            </p>
        </div>
        <perfect-scrollbar>
            <div class="container sm">
                <div class="row mt-2">
                    <div class="card mt-2 ">
                        <div class="card-body">
                            <img
                                @click="hey"
                                :src="`./image/4.png`"
                                class=" customimg rounded  "
                                alt="..."
                            />
                            <span class="circle ml-4">VS</span>
                            <img
                                :src="`./image/chelsa.png`"
                                class="  rounded secimg "
                                alt="..."
                            />
                            <span class="vl"></span>

                            <img
                                :src="`./image/4.png`"
                                class=" resultimg rounded mr-3 float-right "
                                alt="..."
                            />
                        </div>
                    </div>
                    <div class="card mt-2 ">
                        <div class="card-body">
                            <img
                                @click="hey"
                                :src="`./image/4.png`"
                                class=" customimg rounded  "
                                alt="..."
                            />
                            <span class="circle ml-4">VS</span>
                            <img
                                :src="`./image/chelsa.png`"
                                class="  rounded secimg "
                                alt="..."
                            />
                            <span class="vl"></span>

                            <img
                                :src="`./image/chelsa.png`"
                                class=" resultimg rounded mr-3 float-right "
                                alt="..."
                            />
                        </div>
                    </div>

                    <div class="card mt-2 ">
                        <div class="card-body">
                            <img
                                @click="hey"
                                :src="`./image/4.png`"
                                class=" customimg rounded  "
                                alt="..."
                            />
                            <span class="circle ml-4">VS</span>
                            <img
                                :src="`./image/chelsa.png`"
                                class="  rounded secimg "
                                alt="..."
                            />
                            <span class="vl"></span>

                            <img
                                :src="`./image/4.png`"
                                class=" resultimg rounded mr-3 float-right "
                                alt="..."
                            />
                        </div>
                    </div>

                    <div class="card mt-2 ">
                        <div class="card-body">
                            <img
                                @click="hey"
                                :src="`./image/4.png`"
                                class=" customimg rounded  "
                                alt="..."
                            />
                            <span class="circle ml-4">VS</span>
                            <img
                                :src="`./image/chelsa.png`"
                                class="  rounded secimg "
                                alt="..."
                            />
                            <span class="vl"></span>

                            <img
                                :src="`./image/chelsa.png`"
                                class=" resultimg rounded mr-3 float-right "
                                alt="..."
                            />
                        </div>
                    </div>

                    <div class="card mt-2 ">
                        <div class="card-body">
                            <img
                                @click="hey"
                                :src="`./image/4.png`"
                                class=" customimg rounded  "
                                alt="..."
                            />
                            <span class="circle ml-4">VS</span>
                            <img
                                :src="`./image/chelsa.png`"
                                class="  rounded secimg "
                                alt="..."
                            />
                            <span class="vl"></span>

                            <img
                                :src="`./image/4.png`"
                                class=" resultimg rounded mr-3 float-right "
                                alt="..."
                            />
                        </div>
                    </div>

                    <div class="card mt-2 ">
                        <div class="card-body">
                            <img
                                @click="hey"
                                :src="`./image/4.png`"
                                class=" customimg rounded  "
                                alt="..."
                            />
                            <span class="circle ml-4">VS</span>
                            <img
                                :src="`./image/chelsa.png`"
                                class="  rounded secimg "
                                alt="..."
                            />
                            <span class="vl"></span>

                            <img
                                :src="`./image/4.png`"
                                class=" resultimg rounded mr-3 float-right "
                                alt="..."
                            />
                        </div>
                    </div>
                </div>

                <Inertia-link
                    href="/finale"
                    class="btn btn-primary btnfinish btn-lg mt-2"
                    >Finish</Inertia-link
                >
            </div>
        </perfect-scrollbar>
    </div>
</template>

<script>
export default {
    name: "teamshow",
    methods: {
        
    }
};
</script>

