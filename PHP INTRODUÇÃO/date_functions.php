<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            background-color: black;
            color: white;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <?php 
        // funções nativa para manipular datas 
        
        // date(formato) -> recuperar data local
        // 'd' -> dia
        // 'm' -> mês
        // 'y' -> ano || 'o' -> ano inteiro
        // 'l' -> dia da semana
        // 'a' | 'A' -> retorna se está am|pm
        // 'F' -> mês
        // 'H'|'G' -> Horas
        // 'i' -> minutos
        // 's' -> segundos 
        echo date('l F d.m.o ');
        echo '<br>'.date('a A');
        echo '<br>'.date('H:i:s ');

        // date_default_timezone_get(timezone) -> Recuperar o timezone default da aplicação
        echo date_default_timezone_get();

        // date_default_timezone_set(timezone) -> Atualizar o timezone default da aplicação
        date_default_timezone_set('America/Sao_Paulo');
        echo '<br>'.date('H:i:s ');
        echo date_default_timezone_get();

        echo '<br>';
        
        $data_inicial = '2022-07-28';
        $data_final = '2022-08-28';

        // timestamp
        // 01/01/1970 -- 2022-07-28

        // strtotime(data) -> Transformar datas textuais em segundos (php) // milisegundos(js)
        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        $time_dif = ($time_final - $time_inicial);
        $time_dif_minutos = ($time_dif)/60;
        $time_dif_horas = ($time_dif_minutos)/60;
        $time_dif_dias = ($time_dif_horas)/24;
        $time_dif_mes = ($time_dif_dias)/31;
        echo "<br>Diferença entre $data_inicial e $data_final";
        echo '<br> Mês: '.$time_dif_mes;
        echo '<br> Dias: '.$time_dif_dias;
        echo '<br> Minutos: '.$time_dif_minutos;
        echo '<br> Segundos: '.$time_dif;
        
    ?>
</body>
</html>