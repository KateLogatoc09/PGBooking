<template>
	<div>

<heady/>
<navi/>
<contactus/>
<userprofile/>
<booking/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import contactus from"@/components/content/contactus.vue";
import userprofile from"@/components/content/userprofile.vue";
import booking from"@/components/content/booking.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,contactus, userprofile, booking, footerr
  }
};
</script>