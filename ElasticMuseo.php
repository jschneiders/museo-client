<?php

	class ElasticMuseo
	{
		private $host = "localhost"; #host do elasticsearch
		private $port = 9200;		 #porta do elasticsearch
		private $index = "obras"; 	 #indice onde a busca acontece
		public $noResults = 50;		 #número de resultados na query

		#field = campo onde a busca acontece, se deixado vazio pesquisa em todos os campos indexados
		#tipoObra = tipo de obra a ser pesquisado, se vazio pesquisa por todos
		#museu = Museu para filtrar as obras, se vazio, pesquisa em todos
		#offset = Offset na busca para permitir páginas
		public function getObras($field,$query,$tipoObra,$museu,$offset=0)
		{

			if($field == "") //para procurar em todas as partes indexadas do documento
			{
				$field = "_all";
			}

			if($query == "") //se query vazia coloca *, assim pega todos
			{
				$query = "*";
			}
			//prepara a url
			$query = urlencode($query);
			$field = urlencode($field);
			$museu = urlencode($museu);

			$filtroMuseu = "";
			if($museu != "")
			{
				$filtroMuseu = sprintf("&q=museu:%s",$museu);
			}

			$url = sprintf("http://%s:%u/%s/",$this->host,$this->port,$this->index);


			if($tipoObra != "")
			{
				$tipoObra = urlencode($tipoObra)."/";
			}


			$request = sprintf("%s_search?default_operator=AND&q=%s:%s&size=%u&from=%u%s",$tipoObra,$field,$query,$this->noResults,$offset,$filtroMuseu);


			$result = file_get_contents($url.$request);

			$json = json_decode($result);
			#echo json_encode($json);
			return json_encode($json->hits->hits);
			#return $result;
		}
	}

	#$es = new ElasticMuseo();
	#$var = $es->getObras("","victor","","",0); //pesquisa por qualquer ocorrencia de monna lisa

	#vardump($var);
	#$var = json_decode($var);
	#echo $var['hits']['hits'][0]['_index'];
	#var_dump($var);
	#echo $var[0]->_index;
	#echo $es->getObras("","Victor","","",0) //pesquisa por O grito no titulo

	// $es->getObras("","","Pintura","",100) //pesquisa por Pinturas e retorna com offset 100 no resultado
?>
