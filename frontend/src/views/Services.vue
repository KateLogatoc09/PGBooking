<template>
	<div>

<heady/>
<navi/>
<service/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import service from"@/components/content/service.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,service,footerr
  }
};
</script>