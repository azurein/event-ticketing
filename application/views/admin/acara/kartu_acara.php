
    <div class="modal fade" role="dialog" tabindex="-1" id="deleteModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p id="deleteText"></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Tidak </button>
                    <button id="delButton" class="btn btn-success" type="button">Ya </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="addModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Tambah Komponen</h4></div>
                <div class="modal-body">
                    <form id="addForm">
                        <div class="form-group"><label>Nama Komponen</label>
                            <input id="compName" maxlength="30" class="form-control" type="text" required="">
                        </div>
                        <div class="form-group"><label>Jenis Komponen</label>
                            <select id="compType" class="form-control"></select>
                        </div>
                        <div id="Img-Upload" class="hide">
                            <div class="form-group"><label>Gambar</label></div>
                            <input id="compFile" type="file" class="input-file">
                        </div>
                        <div id="Text" class="hide">
                            <div class="form-group"><label>Text</label>
                                <input id="compText" class="form-control" type="text" required="">
                            </div>
                        </div>

                        <div id="Color" class="form-group"><label>Warna</label>
                            <input id="addColor" type="text" class="form-control minicolors-input">
                        </div>

                        <div id="FontFam" class="hide">
                            <div class="form-group"><label>Font Type</label>
                                <div class="bfh-selectbox bfh-fonts addFonts" data-font="Arial" data-blank="false">
                                </div>
                                <div class="bfh-selectbox bfh-googlefonts addGoogleFonts" data-font="Lato" data-blank="false" style="display:none;">
                                </div>
                            </div>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active addStandard">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>Standard Font
                                </label>
                                <label class="btn btn-primary addGoogle">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Google Font
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Batal </button>
                    <button id="compAdd" class="btn btn-success" type="button">Simpan </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Ubah Komponen</h4>
                </div>
                <div class="modal-body">
                    <form  id="editForm">
                        <div class="form-group"><label>Nama Komponen</label>
                            <input id="editCompName" maxlength="30" class="form-control" type="text" required="">
                        </div>
                        <div class="form-group"><label>Jenis Komponen</label>
                            <select id="editCompType" class="form-control"></select>
                        </div>

                        <div id="Img-Upload" class="hide">
                            <div class="form-group"><label>Gambar</label></div>
                            <input id="editCompFile" type="file" class="input-file">
                        </div>

                        <div id="Text" class="hide">
                            <div class="form-group"><label>Text</label>
                                <input id="editCompText" class="form-control" type="text" required="">
                            </div>
                        </div>

                        <div id="Color" class="form-group"><label>Warna</label>
                            <input id="editColor" type="text" class="form-control minicolors-input">
                        </div>

                        <div id="FontFam" class="hide">
                            <div class="form-group"><label>Font Type</label>
                                <div class="bfh-selectbox bfh-fonts editFonts" data-font="Arial" data-blank="false">
                                </div>
                                <div class="bfh-selectbox bfh-googlefonts editGoogleFonts" data-font="Lato" data-blank="false" style="display:none;">
                                </div>
                            </div>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active editStandard">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>Standard
                                </label>
                                <label class="btn btn-primary editGoogle">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Google Font
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Batal </button>
                    <button id="compEdit" class="btn btn-success" type="button">Simpan </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" data-backdrop ="static" data-keyboard="false"  id="loadingModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p>
                        Mohon Tunggu...
                    </p>

                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%" id="printProgress">
                            <span class="sr-only">0% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="panel-group" role="tablist" aria-multiselectable="true" id="accordion-2">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-1">Scan via QR Scanner</a></h4>
                        </div>
                        <div class="panel-collapse collapse in item-1" role="tabpanel">
                            <div class="well" >
                                <form id="scannerFormQr">
                                    <label>Kode</label>
                                    <input type="text" id="scannerInputQr" class="form-control" autocomplete="off" autofocus>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-2">Scan via Camera</a></h4>
                        </div>
                        <div class="panel-collapse collapse item-2" role="tabpanel">
                            <div class="well" >
                                <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                                <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                                <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                                <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                                <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>

                                <div class="well">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <select class="form-control" id="camera-select" style="height: 25px;"></select>
                                        </div>
                                        <div class="col-xs-4">
                                            <button title="Play" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-play"></span></button>
                                            <button title="Stop streams" class="btn btn-danger btn-sm" id="stop" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-stop"></span></button>
                                        </div>
                                    </div>
                                    <br>
                                    <label id="zoom-value" width="100">Zoom: 2</label>
                                    <input id="zoom" onchange="Page.changeZoom();" type="range" min="10" max="30" value="20">
                                    <label id="brightness-value" width="100">Brightness: 0</label>
                                    <input id="brightness" onchange="Page.changeBrightness();" type="range" min="0" max="128" value="0">
                                    <label id="contrast-value" width="100">Contrast: 0</label>
                                    <input id="contrast" onchange="Page.changeContrast();" type="range" min="-128" max="128" value="0">
                                    <label id="threshold-value" width="100">Threshold: 0</label>
                                    <input id="threshold" onchange="Page.changeThreshold();" type="range" min="0" max="512" value="0"><br>
                                    <label id="sharpness-value" width="100">Sharpness: off</label>
                                    <input id="sharpness" onchange="Page.changeSharpness();" type="checkbox"><br>
                                    <label id="grayscale-value" width="100">grayscale: off</label>
                                    <input id="grayscale" onchange="Page.changeGrayscale();" type="checkbox"><br>
                                    <label id="flipVertical-value" width="100">Flip Vertical: off</label>
                                    <input id="flipVertical" onchange="Page.changeVertical();" type="checkbox"><br>
                                    <label id="flipHorizontal-value" width="100">Flip Horizontal: off</label>
                                    <input id="flipHorizontal" onchange="Page.changeHorizontal();" type="checkbox"><br>
                                </div>
                                <p id="scanned-QR"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <fieldset>
                    <legend>Kartu </legend>
                </fieldset>
                <div class="top-buffer card-buffer"></div>
                <div id="cvs" style="text-align:center;">
                    <canvas id="cardFront"></canvas>
                    <canvas id="cardBack"></canvas>
                </div>
                <div class="bottom-buffer card-buffer"></div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nama Komponen</th>
                                <th>Jenis Komponen</th>
                                <th class="th-mini"> <i class="fa fa-rotate-right"></i></th>
                                <th class="th-mini"> <i class="fa fa-clone"></i></th>
                                <th>Tindakan </th>
                            </tr><label id="currStat"></label>
                        </thead>
                        <tbody id="editorTable">
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="active" colspan="9">
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addModal">Tambah Komponen</button>
                                        <button class="btn btn-info" type="button" id="rotateCard">Mode Vertikal</button>
                                        <button class="btn btn-info" type="button" id="flipCard">Sebaliknya</button>
                                        <button class="btn btn-success" type="button" id="exportButton">Cetak Masal</button>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer></footer>
</body>

</html>