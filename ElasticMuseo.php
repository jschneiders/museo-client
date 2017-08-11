<?php

	class ElasticMuseo
	{
		private $host = "localhost"; #host do elasticsearch
		private $port = 9200;		 #porta do elasticsearch
		private $index = "obras"; 	 #indice onde a busca acontece
		public $noResults = 50;		 #número de resultados na query

		#field = campo onde a busca acontece
		#tipoObra = tipo de obra onde a busca acontece (Pintura,Arquitetura)
		#offset = Offset na busca para permitir páginas
		public function getObras($field,$query,$tipoObra="_all",$offset=0)
		{

			if($tipoObra == "")
			{
				$request = sprintf("http://%s:%u/%s/_search?q=%s:%s&size=%u&from=%u",$this->host,$this->port,$this->index,$field,$query,$this->noResults,$offset);
			}
			else
			{
				$request = sprintf("http://%s:%u/%s/%s/_search?q=%s:%s&size=%u&from=%u",$this->host,$this->port,$this->index,$tipoObra,$field,$query,$this->noResults,$offset);
			}


			$result = file_get_contents($request);

			$json = json_decode($result);

			return json_encode($json->hits->hits);
		}
	}

	#$es = new ElasticMuseo();
	#echo $es->getObras("titulo","homem","",0);
?>
