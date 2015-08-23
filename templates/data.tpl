<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Таблица результатов чемпионата Украины по футболу(Премьер-лига)</title>
    <link rel="stylesheet" href="css/style.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</head>
<body>
<div class="chart-wrap">
    <div class="chart-title">УКРАИНА. ПРЕМЬЕР-ЛИГА, 2015 - 2016</div>
    <div id="dashboard-stats" class="chart bars-horizontal brand-primary">
        <div class="chart-table">Турнирная таблица</div>
        {foreach $teams as $key=>$team}
            <div class="row">

                <p class="label"><img src="{$links_for_teams_preview[{$key}]}" alt="lorem">{$team["name"]}</p>
                <div class="bar-wrap">
                    <div class="bar" data-value="{$team["point"]}"></div>
                </div>
                <span class="number">{$team["point"]}</span>
            </div>
        {/foreach}
    </div>
    <div class="result">
        <div class="chart-tour">Результати последнего тура</div>
        <div class ="result_list">
            {foreach $last_tour_results as $key=>$result}
                <img src="{$links_for_teams_preview[$result["master"]]}">
                {$result["count"]}
                <img src="{$links_for_teams_preview[$result["guest"]]}">
                <br/>
            {/foreach}
        </div>

    </div>
</div>
<div id="author"><a href="https://github.com/Bugaevskiy">Hungry Junior</a</div>
</body>
</html>