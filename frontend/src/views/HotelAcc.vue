<template>
    <heady/>
    <navi/>
    <hotelpage/>
    <footerr/>
        
    </template>
    <script>
    
    import heady from"@/components/heady.vue";
    import navi from"@/components/inc/navigation.vue";
    import hotelpage from"@/components/inc/hotelpage.vue";
    import footerr from"@/components/inc/footerr.vue";
    export default {
      components: {
        heady,navi,hotelpage,footerr
      }
    };
    </script>