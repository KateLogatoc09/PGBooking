<template>
	<div>

<heady/>
<navi/>
<hotelregister/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import hotelregister from"@/components/inc/hotelregister.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,hotelregister,footerr
  }
};
</script>