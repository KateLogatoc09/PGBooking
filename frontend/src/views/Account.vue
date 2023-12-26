<template>
<heady/>
<navi/>
<userprofile/>
<booking/>
<footerr/>
    
</template>
<script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import userprofile from"@/components/content/userprofile.vue";
import booking from"@/components/content/booking.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,userprofile, booking,footerr
  }
};
</script>