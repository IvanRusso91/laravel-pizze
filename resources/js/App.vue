<template>
    <div>
        <HederComp />

        <main>

        </main>


        <FooterComp />

    </div>
</template>

<script>

import HeaderComp from './partial/HeaderComp';
import FooterComp from './partial/FooterComp';

export default {
    name:'App',
    components:{

        HeaderComp,
        FooterComp,
    }

}
</script>

<style>

</style>
