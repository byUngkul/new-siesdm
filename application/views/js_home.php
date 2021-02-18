<script type="text/javascript">
	$(document).ready(() => {
		cardInfo();
	})

	function cardInfo() {
		console.log('tests')
		$.get('<?= base_url() ?>/dashboard/get_data_card', (result) => {
			let aa = JSON.parse(result);
			
			document.getElementById('tot_perusahaan_abt').innerText = aa.tot_perusahaan_abt;
			document.getElementById('tot_sumur_abt').innerText = aa.tot_sumur_abt;
			document.getElementById('tot_sipa_habis').innerText = aa.tot_sipa_habis;
			document.getElementById('tot_sipa_aktip').innerText = aa.tot_sipa_aktip;
			document.getElementById('tot_abt_tidak_berizin').innerText = aa.tot_abt_tidak_berizin;
			document.getElementById('tot_tambang_berizin').innerText = aa.tot_tambang_berizin;
			document.getElementById('tot_tambang_tidak_berizin').innerText = aa.tot_tambang_tidak_berizin;
		});
	}
</script>
