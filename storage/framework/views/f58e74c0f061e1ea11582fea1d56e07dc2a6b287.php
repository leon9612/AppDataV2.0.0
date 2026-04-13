<?php echo $__env->make('layout.heder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main id="main">
    <section id="visor" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Alineación</h2>
            </div>

            <div class="row" data-aos="fade-in">
                <div class="col-lg-12 mt-12 mt-lg-12 d-flex align-items-stretch">
                    <form action="<?php echo e(url('/al')); ?>" method="POST" id="form-datos" class="form-control p-4 rounded shadow-sm">
                        <?php echo csrf_field(); ?>
                        
                        <!-- Alertas mejoradas -->
                        <?php if($message = Session::get('succses')): ?>
                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <h5 class="alert-heading mb-2"><i class="bi bi-check-circle-fill me-2"></i>Exitoso</h5>
                                <p class="mb-0"><?php echo e($message); ?></p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>
                        <?php if($message = Session::get('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                <h5 class="alert-heading mb-2"><i class="bi bi-exclamation-triangle-fill me-2"></i>Error</h5>
                                <p class="mb-0"><?php echo e($message); ?></p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <!-- Componente reutilizable -->
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

                        <!-- Sección de mediciones de ejes mejorada -->
                        <div class="row mt-4">
                            <div class="col-12 mb-3">
                                <h5 class="border-bottom pb-2 text-dark">
                                    <i class="bi bi-speedometer2 me-2"></i>
                                    Mediciones de Ejes
                                </h5>
                            </div>
                            
                            <div class="col-sm-12 col-md-2 col-lg-2 mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" step="0.01" name="eje1" id="eje1" placeholder="1" value="<?php echo e(old('eje1')); ?>">
                                    <label for="eje1">Eje 1</label>
                                    <?php if($errors->has('eje1')): ?>
                                        <span class="error text-danger small mt-1 d-block"><?php echo e($errors->first('eje1')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-2 col-lg-2 mb-3">
                                <div class="form-floating">
                                    <input type="number" step="0.01" class="form-control" placeholder="2" name="eje2" id="eje2" value="<?php echo e(old('eje2')); ?>">
                                    <label for="eje2">Eje 2</label>
                                    <?php if($errors->has('eje2')): ?>
                                        <span class="error text-danger small mt-1 d-block"><?php echo e($errors->first('eje2')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-2 col-lg-2 mb-3">
                                <div class="form-floating">
                                    <input type="number" step="0.01" class="form-control" placeholder="3" name="eje3" id="eje3" value="<?php echo e(old('eje3')); ?>">
                                    <label for="eje3">Eje 3</label>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-2 col-lg-2 mb-3">
                                <div class="form-floating">
                                    <input type="number" step="0.01" class="form-control" placeholder="4" name="eje4" id="eje4" value="<?php echo e(old('eje4')); ?>">
                                    <label for="eje4">Eje 4</label>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-2 col-lg-2 mb-3">
                                <div class="form-floating">
                                    <input type="number" step="0.01" class="form-control" placeholder="5" name="eje5" id="eje5" value="<?php echo e(old('eje5')); ?>">
                                    <label for="eje5">Eje 5</label>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-2 col-lg-2 mb-3 d-flex align-items-end">
                                <button id="btn-guardar" class="btn btn-success w-100 py-3" type="submit">
                                    <i class="bi bi-check-lg me-2"></i>Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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

    })



    $(".selPlaca").change(function(e) {
        e.preventDefault();
        var placa = $('.selPlaca option:selected').attr('value');
        var placa2 = placa.split("-");
        $(".Vplaca").val(placa2[1]);
        $("#placa").val(placa2[1]);
        $("#idprueba").val(placa2[0]);
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
                    idtipo_prueba: 10,
                    _token: $("input[name='_token']").val()
                },
                success: function(data, textStatus, jqXHR) {
                    if (data.length > 0) {
                        $.each(data, function(i, res) {
                            if (res.observacion == 'Alineacion eje 1')
                                $("#eje1").val(res.valor);
                            if (res.observacion == 'Alineacion eje 2')
                                $("#eje2").val(res.valor);
                            if (res.observacion == 'Alineacion eje 3')
                                $("#eje3").val(res.valor);
                            if (res.observacion == 'Alineacion eje 4')
                                $("#eje4").val(res.valor);
                            if (res.observacion == 'Alineacion eje 5')
                                $("#eje5").val(res.valor);
                        });
                    }else{
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
                    prueba: 'Alineacion',
                    tipoprueba: '10',
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

    })
</script><?php /**PATH /var/www/html/resources/views/TipoPrueba/alineacion.blade.php ENDPATH**/ ?>