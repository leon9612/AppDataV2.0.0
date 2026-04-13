<?php echo $__env->make('layout.heder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    #btn-buscar-placa {
        display: none;
    }
</style>
<main id="main">
    <section id="visor" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Sonometro</h2>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-12 mt-12 mt-lg-12 d-flex align-items-stretch">
                    <form action="<?php echo e(url('/so')); ?>" method="POST" class="form-control">
                        <?php echo csrf_field(); ?>
                        <?php if($message = Session::get('success')): ?>
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
                            <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                <div class="input-group mb-3" style="align-content: center">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" step="0.01" id="floatingInput"
                                            name="valson" id="valson" placeholder="1" value="<?php echo e(old('valson')); ?>">
                                        <label for="floatingInput">Valor</label>
                                        <?php if($errors->has('valson')): ?>
                                        <span class="error text-danger"><?php echo e($errors->first('valson')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <input type="hidden" name="tipoprueba" id="tipoprueba" value="4">
                                <input type="hidden" name="tipopruebaCi2" id="tipopruebaCi2" value="12">
                                <input type="hidden" name="prueba" id="prueba" value="Sonometro">
                                <button style="width: 100%; height: 55px;" id="btn-guardar"
                                    class="btn btn-outline-success" type="submit">Guardar</button>
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
        document.getElementById("btn-guardar").disabled = true; // Deshabilitar el botón al cargar la página
    });

    $(".selPlaca").change(function(e) {
        e.preventDefault();
        var placa = $('.selPlaca option:selected').attr('value');
        var placa2 = placa.split("-");
        $(".Vplaca").val(placa2[1]);
        $("#placa").val(placa2[1]);
        $("#idprueba").val(placa2[0]);
        console.log(placa2);

    });
    // $("#btn-evento").click(function(ev) {
    //     ev.preventDefault();
    //     if ($(".Vplaca").val() == null || $(".Vplaca").val() == "") {
    //         Toast.fire({
    //             icon: "error",
    //             title: "Seleccione una placa"
    //         });
    //     } else {
    //         $.ajax({
    //             url: 'getevento/',
    //             type: 'post',
    //             dataType: 'json',
    //             data: {
    //                 placa: $(".Vplaca").val(),
    //                 prueba: 'Sonometro',
    //                 tipoprueba: '4',
    //                 tipovehiculo: '1',
    //                 tipoevento: '1',
    //                 _token: $("input[name='_token']").val()
    //             },
    //             success: function(data, textStatus, jqXHR) {
    //                 document.getElementById("btn-guardar").disabled = false;
    //                 Toast.fire({
    //                     icon: "success",
    //                     title: "Evento creado, tenga en cuenta el tiempo de duracion de la prueba, para enviar los datos."
    //                 });

    //             },
    //             error: function(jqXHR, textStatus, errorThrown) {
    //                 console.log('error')
    //                 console.log(jqXHR.responseText)
    //                 console.log(textStatus)
    //                 console.log(errorThrown)
    //             }
    //         });
    //     }

    // });
</script><?php /**PATH C:\Apache248\htdocs\AppData\resources\views/TipoPrueba/sonometro.blade.php ENDPATH**/ ?>