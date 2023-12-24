<template>
	<div id="app">

<add/>
<div id="wrapper">
<navy/>
<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
<tbar/>
<Dboard/>
</div>
</div>
</div>
<foot/>

  
	</div>
 
  </template>
  <script>

import add from"@/components/Admin/add.vue";
import navy from"@/components/Admin/navy.vue";
import Dboard from"@/components/Admin/dashboard.vue";
import tbar from"@/components/Admin/topbar.vue";
import foot from"@/components/Admin/footer.vue";

//import prod from"@/components/laman/prod.vue";
export default {
  components: {
    add, navy, tbar, Dboard, foot
  }
};
</script>