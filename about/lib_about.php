<?php

class About{

    public function showAbout(){

        echo '<div class="container">
                        <div class="jumbotron">
                            <h1><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Acerca de...</h1><hr>

                                <div class="panel-group" id="accordion">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                               <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Desarrollo</a>
                            </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item"><span class="label label-default">Desarrollador Principal:</span> Augusto Maza</li>
                                    <li class="list-group-item"><span class="label label-default">Empresa:</span> Slackzone Development</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Especificaciones Técnicas</a>
                            </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item"><span class="label label-default">Web Server:</span> Apache Server 2.4 o superior</li>
                                    <li class="list-group-item"><span class="label label-default">Database Server:</span> MariaDB Server 10.3 o superior</li>
                                    <li class="list-group-item">PHP 7.4 o superior</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Licencia</a>
                            </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item"><span class="label label-default">Tipo de Licencia:</span> GPL 2.0</li>
                                    <li class="list-group-item"><span class="label label-default">Licenciado a:</span> Augusto Maza / Slackzone Development</li>
                                    <li class="list-group-item">link</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contacto</a>
                            </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item">First item</li>
                                    <li class="list-group-item">Second item</li>
                                    <li class="list-group-item">Third item</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        </div>
                        <hr>

                        </div>
                        </div>';

    } // end of function


} // END OF CLASS

?>
