<template>
	<div>
<heady/>
<navi/>
<about/>
<service/>
<tophotel/>
<hotels/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import about from"@/components/content/about.vue";
import service from"@/components/content/service.vue";
import tophotel from"@/components/content/tophotel.vue";
import hotels from"@/components/content/hotels.vue";
import subscribe from"@/components/inc/subscribe.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,service,about,tophotel,hotels,subscribe,footerr
  }
};
</script>