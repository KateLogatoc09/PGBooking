<template>
	<div>

<heady/>
<navi/>
<service/>
<bookingconfirm/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import service from"@/components/content/service.vue";
import bookingconfirm from"@/components/content/bookingconfirm.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,service,bookingconfirm,footerr
  }
};
</script>