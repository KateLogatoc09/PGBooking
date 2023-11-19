<template>
	<div>

<heady/>
<navi/>
<hotels/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import hotels from"@/components/content/hotels.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,hotels,footerr
  }
};
</script>