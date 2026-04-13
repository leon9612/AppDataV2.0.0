<?php echo $__env->make('layout.heder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main id="main">
    <section id="visor" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Opacimetro</h2>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-12 mt-12 mt-lg-12 d-flex align-items-stretch">
                    <form action="<?php echo e(url('/op')); ?>" method="POST" class="form-control">
                        <?php echo csrf_field(); ?>
                        <?php if($message = Session::get('succses')): ?>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Exitoso</h4>
                            <p><?php echo e($message); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if($message = Session::get('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Error</h4>
                            <p><?php echo e($message); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.vehicle-selector','data' => ['placas' => $placas,'usuarios' => $usuarios,'maquinas' => $maquinas]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('vehicle-selector'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placas' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($placas),'usuarios' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usuarios),'maquinas' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($maquinas)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <label class="input-group-text" for="inputGroupSelect01">Ltoe equipo</label>
                                    <select class="form-select selLtoeEquipo" id="inputGroupSelect01"
                                        name="selLtoeEquipo">
                                        <option value="0.215" selected>Capelec - 215</option>
                                        <option value="0.430">Motorscarn - 430</option>
                                        <option value="0.364">Sensor - 364</option>
                                        <option value="0.200">Brainbee - 200</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01" name="opa1"
                                            id="opa1" placeholder="1" value="<?php echo e(old('opa1')); ?>">
                                        <label for="floatingInput">Opacidad 1</label>
                                        <?php if($errors->has('opa1')): ?>
                                        <span class="error text-danger"><?php echo e($errors->first('opa1')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01" name="opa2"
                                            id="opa2" placeholder="1" value="<?php echo e(old('opa2')); ?>">
                                        <label for="floatingInput">Opacidad 2</label>
                                        <?php if($errors->has('opa2')): ?>
                                        <span class="error text-danger"><?php echo e($errors->first('opa2')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01" name="opa3"
                                            id="opa3" placeholder="1" value="<?php echo e(old('opa3')); ?>">
                                        <label for="floatingInput">Opacidad 3</label>
                                        <?php if($errors->has('opa3')): ?>
                                        <span class="error text-danger"><?php echo e($errors->first('opa3')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01" name="opa4"
                                            id="opa4" placeholder="1" value="<?php echo e(old('opa4')); ?>">
                                        <label for="floatingInput">Opacidad 4</label>
                                        <?php if($errors->has('opa4')): ?>
                                        <span class="error text-danger"><?php echo e($errors->first('opa4')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01"
                                            name="Rpm_gobernada" id="Rpm_gobernada" placeholder="1"
                                            value="<?php echo e(old('Rpm_gobernada')); ?>">
                                        <label for="floatingInput">Rpm gobernada</label>
                                        <?php if($errors->has('Rpm_gobernada')): ?>
                                        <span
                                            class="error text-danger"><?php echo e($errors->first('Rpm_gobernada')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01" name="Rpm_ralenti"
                                            id="Rpm_ralenti" placeholder="1" value="<?php echo e(old('Rpm_ralenti')); ?>">
                                        <label for="floatingInput">Rpm ralenti</label>
                                        <?php if($errors->has('Rpm_ralenti')): ?>
                                        <span class="error text-danger"><?php echo e($errors->first('Rpm_ralenti')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01" name="opa1k"
                                            id="opa1k" placeholder="1" value="<?php echo e(old('opa1k')); ?>">
                                        <label for="floatingInput">Opacidad 1 K</label>
                                        <?php if($errors->has('opa1k')): ?>
                                        <span class="error text-danger"><?php echo e($errors->first('opa1k')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01" name="opa2k"
                                            id="opa2k" placeholder="1" value="<?php echo e(old('opa2k')); ?>">
                                        <label for="floatingInput">Opacidad 2 K</label>
                                        <?php if($errors->has('opa2k')): ?>
                                        <span class="error text-danger"><?php echo e($errors->first('opa2k')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01" name="opa3k"
                                            id="opa3k" placeholder="1" value="<?php echo e(old('opa3k')); ?>">
                                        <label for="floatingInput">Opacidad 3 K</label>
                                        <?php if($errors->has('opa3k')): ?>
                                        <span class="error text-danger"><?php echo e($errors->first('opa3k')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01" name="opa4k"
                                            id="opa4k" placeholder="1" value="<?php echo e(old('opa4k')); ?>">
                                        <label for="floatingInput">Opacidad 4 K</label>
                                        <?php if($errors->has('opa4k')): ?>
                                        <span class="error text-danger"><?php echo e($errors->first('opa4k')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01" id="floatingInput"
                                            name="ltoe" id="ltoe" placeholder="1"
                                            value="<?php echo e(old('ltoe')); ?>">
                                        <label for="floatingInput">Ltoe</label>
                                        <?php if($errors->has('ltoe')): ?>
                                        <span class="error text-danger"><?php echo e($errors->first('ltoe')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <button style="width: 100%; height: 55px;" class="btn btn-outline-secondary"
                                    id="btn-calcular">Calcular datos</button>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <button style="width: 100%; height: 55px;" class="btn btn-outline-success"
                                    type="submit" id="btn-guardar-opa" disabled>Guardar</button>
                            </div>
                        </div>



                </div>

                </form>
            </div>

        </div>
    </section>
    <!-- ======= Contact Section ======= -->
</main>
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    $(document).ready(function() {
        // localStorage.setItem('selLtoeEquipo',$(".selLtoeEquipo").val());
        if (localStorage.getItem('selLtoeEquipo')) {
            $('.selLtoeEquipo').val(localStorage.getItem('selLtoeEquipo'));
        }

    })
    $('.selLtoeEquipo').change(function() {
        localStorage.setItem('selLtoeEquipo', $(this).val());
    });


    $(".selPlaca").change(function(e) {
        e.preventDefault();
        var placa = $('.selPlaca option:selected').attr('value');
        var placa2 = placa.split("-");
        console.log(placa2);
        $("#placa").val(placa2[1]);
        $(".Vplaca").val(placa2[1]);
        $("#idprueba").val(placa2[0]);

    });




    $("#btn-calcular").click(function(ev) {
        var ln = $(".selLtoeEquipo").val();
        ev.preventDefault();
        var opa1 = $("#opa1").val();
        var opa2 = $("#opa2").val();
        var opa3 = $("#opa3").val();
        var opa4 = $("#opa4").val();
        //        $("#opa1k").val(Math.round(-(1 / ln) * Math.log((1 - (opa1 / 100))) * 100) / 100);
        //        $("#opa2k").val(Math.round(-(1 / ln) * Math.log((1 - (opa2 / 100))) * 100) / 100);
        //        $("#opa3k").val(Math.round(-(1 / ln) * Math.log((1 - (opa3 / 100))) * 100) / 100);
        //        $("#opa4k").val(Math.round(-(1 / ln) * Math.log((1 - (opa4 / 100))) * 100) / 100);
        // $("#opa1k").val(Number.parseFloat(-(1 / ln) * Math.log(1 - (opa1 / 100))).toFixed(2));
        $("#opa1k").val(Number.parseFloat(-(1 / ln) * Math.log((1 - (opa1 / 100)))).toFixed(2));
        $("#opa2k").val(Number.parseFloat(-(1 / ln) * Math.log((1 - (opa2 / 100)))).toFixed(2));
        $("#opa3k").val(Number.parseFloat(-(1 / ln) * Math.log((1 - (opa3 / 100)))).toFixed(2));
        $("#opa4k").val(Number.parseFloat(-(1 / ln) * Math.log((1 - (opa4 / 100)))).toFixed(2));
        document.getElementById("btn-guardar-opa").disabled = false;
    });
    $("#btn-evento").click(function(ev) {
        ev.preventDefault();
        if ($(".Vplaca").val() == null || $(".Vplaca").val() == "") {
            Toast.fire({
                icon: "error",
                title: "Seleccione una placa"
            });
        } else {
            $.ajax({
                url: 'getevento/',
                type: 'post',
                dataType: 'json',
                data: {
                    placa: $(".Vplaca").val(),
                    prueba: 'Gases',
                    tipoprueba: '2',
                    tipovehiculo: '1',
                    tipoevento: '1',
                    _token: $("input[name='_token']").val()
                },
                success: function(data, textStatus, jqXHR) {
                    Toast.fire({
                        icon: "success",
                        title: "Evento creado, tenga en cuenta el tiempo de duracion de la prueba, para enviar los datos."
                    });

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('error')
                    console.log(jqXHR.responseText)
                    console.log(textStatus)
                    console.log(errorThrown)
                }
            });
        }

    });

    $("#btn-buscar-placa").click(function(e) {
        e.preventDefault();

        if ($(".Vplaca").val() == "" || $(".Vplaca").val() == null) {
            Swal.fire({
                icon: "info",
                title: 'Buscar placa',
                allowOutsideClick: false,
                html: '<div style= "font-size: 18px">Seleccione una placa primero<div>',
                showConfirmButton: true,
            });
        } else {
            $.ajax({
                url: 'buscarvehiculo/',
                type: 'post',
                dataType: 'json',
                data: {
                    placa: $(".Vplaca").val(),
                    idtipo_prueba: 2,
                    _token: $("input[name='_token']").val()
                },
                success: function(data, textStatus, jqXHR) {
                    if (data.length > 0) {
                        $.each(data, function(i, res) {
                            if (res.observacion == 'op_ciclo1')
                                $("#opa1").val(res.valor);
                            if (res.observacion == 'op_ciclo2')
                                $("#opa2").val(res.valor);
                            if (res.observacion == 'op_ciclo3')
                                $("#opa3").val(res.valor);
                            if (res.observacion == 'op_ciclo4')
                                $("#opa4").val(res.valor);
                            if (res.observacion == 'rpm_gobernada')
                                $("#Rpm_gobernada").val(res.valor);
                            if (res.observacion == 'rpm_ralenti')
                                $("#Rpm_ralenti").val(res.valor);




                        });
                    } else {
                        Toast.fire({
                            icon: "error",
                            title: "No se encontraron registros."
                        });
                    }



                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('error')
                    console.log(jqXHR.responseText)
                    console.log(textStatus)
                    console.log(errorThrown)
                }
            });
        }
    })
</script><?php /**PATH /var/www/html/resources/views/TipoPrueba/opacidad.blade.php ENDPATH**/ ?>