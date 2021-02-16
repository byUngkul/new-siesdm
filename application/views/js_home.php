<script type="text/javascript">
	$(document).ready(() => {
		cardInfo();
	})

	function cardInfo() {
		document.getElementById('tot_perusahaan_abt').innerText = '0';
		document.getElementById('tot_sumur_abt').innerText = '0';
		document.getElementById('tot_sipa_habis').innerText = '0';
		document.getElementById('tot_sipa_aktip').innerText = '0';
		document.getElementById('tot_abt_tidak_berizin').innerText = '0';
		document.getElementById('tot_tambang_berizin').innerText = '0';
		document.getElementById('tot_tambang_tidak_berizin').innerText = '0';
	}
</script>
