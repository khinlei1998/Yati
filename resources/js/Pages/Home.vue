<template>
    <div class="container">
        <div class="row">
            <img :src="`./image/5.png`" class=" mr-3 w-100" alt="..." />
        </div>

        <Inertia-link href="/teamshow">
            <div class="sonar-wrapper">
                <div class="sonar-emitter">
                    <p class="textstart">Start</p>
                    <div class="sonar-wave"></div>
                </div>
            </div>
        </Inertia-link>
    </div>
</template>

<script>
export default {
    name:'home'
};
</script>

