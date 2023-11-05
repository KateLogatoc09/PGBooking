<template>
	<div>

<heady/>
<hotelsbanner/>
<hotels/>
<booking/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import hotelsbanner from"@/components/inc/hotelsbanner.vue";
import booking from"@/components/inc/booking.vue";
import hotels from"@/components/content/hotels.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,hotelsbanner,hotels,booking,footerr
  }
};
</script>