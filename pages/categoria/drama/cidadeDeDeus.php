<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "Cidade de Deus");
?>

<script>
	document.querySelectorAll('.nav-item')[2].classList.add('active');
</script>

<main>

	<?php
		include_once "../../../components/Filme/index.php";

		$json = file_get_contents('../../../database/data.json');
		$filmes = json_decode($json);

		echo Filme(
			$filmes->filmes[5]->pagina->categoria,
			$filmes->filmes[5]->pagina->titulo,
			$filmes->filmes[5]->data,
			$filmes->filmes[5]->pagina->autor,
			$filmes->filmes[5]->pagina->banner,
			$filmes->filmes[5]->pagina->sinopse, 
			ListaElenco($filmes->filmes[5]->pagina->elenco),
			$filmes->filmes[5]->pagina->lancamento,
			ListaPlataforma($filmes->filmes[5]->pagina->plataformas),
			$filmes->filmes[5]->pagina->diretor
		);
	?>

</main>

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
