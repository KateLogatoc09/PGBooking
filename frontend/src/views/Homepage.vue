<template>
	<div>

<heady/>
<navy/>
<bgsearch/>
<about/>
<service/>
<hotels/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navy from"@/components/inc/navy.vue";
import bgsearch from"@/components/inc/bgsearch.vue";
import about from"@/components/content/about.vue";
import service from"@/components/content/service.vue";
import hotels from"@/components/content/hotels.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navy,bgsearch,service,about,hotels,footerr
  }
};
</script>