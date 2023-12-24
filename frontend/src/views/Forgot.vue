<template>
	<div>

<heady/>
<navi/>
<forgot/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import forgot from"@/components/inc/forgot.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,forgot,footerr
  }
};
</script>