<template>
	<div>

<heady/>
<navi/>
<hotels/>
<hotelregister/>
<hotelpage/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import hotelregister from"@/components/inc/hotelregister.vue";
import hotelpage from"@/components/inc/hotelpage.vue";
import hotels from"@/components/content/hotels.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,hotels,hotelregister,hotelpage,footerr
  }
};
</script>