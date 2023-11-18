<template>
    <heady/>
    <navi/>
    <login/>
    <footerr/>
        
    </template>
    <script>
    
    import heady from"@/components/heady.vue";
    import navi from"@/components/inc/navigation.vue";
    import login from"@/components/content/login.vue";
    import footerr from"@/components/inc/footerr.vue";
    export default {
      components: {
        heady,navi,login,footerr
      }
    };
    </script>