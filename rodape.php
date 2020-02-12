    <section id="contato" class="get-in-touch">
        <div class="container">
            <h2 class="heading clearfix" style="">Contato</h2>
                <form class="contact-form row" method="post" id="contactform" onSubmit="javascript:validate()" action="enviar.php" role="form">
                <div class="form-field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="input-group">
                    <label class="label">Nome</label>
                    <input class="input-text js-input" name="nome" type="text" id="nome" />
                  </div>
                  <p class="help-block hidden">Por favor o nome deve conter 3 caracteres ou mais.</p>
                </div>
                <div class="form-field col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="input-group">
                    <label class="label">Email</label>
                    <input class="input-text js-input" name="email" type="email" id="email" />
                  </div>
                  <p class="help-block hidden">Por favor entre com um email válido.</p>
                </div>
                <div class="form-field col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="input-group">
                    <label class="label">Telefone</label>
                    <input class="input-text js-input" name="telefone" type="text" id="telefone"/>
                  </div>
                  <p class="help-block hidden">Por favor entre com um número de telefone válido.</p>
                </div>
                <div class="form-field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="input-group">
                    <label class="label">Mensagem</label>
                    <textarea class="input-text js-input" name="mensagem" id="mensagem"></textarea>
                  </div>
                  <p class="help-block hidden">Por favor digite sua mensagem</p>
                </div>
                <div class="form-field col-lg-12">
                    <input class="submit-btn" type="submit" value="Enviar" name="BTEnvia" id="enviar">
                </div>
              </form>
        </div>
    </section>
    


    <!-- FOOTER SECTION -->
    <footer>
        <div class="container">
            <div class="row">
                <div id="contact" class="container text-center">
                    <div class="social-media">
                        <ul class="list-inline">
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/adri.gourmet/" title=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="mailto:adri.gourmet@hotmail.com" title=""><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=5524998540999" title=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <p>2020 © Adriana Gourmet - Todos os direitos reservados</p>
                </div>
            </div>
        </div>
    </footer>
   
   
    <!-- The scroll to top feature -->

    <!--<div class="scroll-top-wrapper ">
  <span class="scroll-top-inner">
    <i class="fa fa-chevron-up"></i>
  </span>
</div>
</div>-->


    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
    <script src="js/jquery.appear.js"></script><!-- contador personalizado -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

    <script>
        $(document).ready(function() {

            $(function() {

                $(document).on('scroll', function() {

                    if ($(window).scrollTop() > 100) {
                        $('.scroll-top-wrapper').addClass('show');
                    } else {
                        $('.scroll-top-wrapper').removeClass('show');
                    }
                });

                $('.scroll-top-wrapper').on('click', scrollToTop);
            });

            function scrollToTop() {
                verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
                element = $('body');
                offset = element.offset();
                offsetTop = offset.top;
                $('html, body').animate({
                    scrollTop: offsetTop
                }, 500, 'linear');
            }

        });


        $(function() {
            $('.stats-bar').appear();
            $('.stats-bar').on('appear', function() {
                var fx = function fx() {
                    $(".stat-number").each(function(i, el) {
                        var data = parseInt(this.dataset.n, 10);
                        var props = {
                            "from": {
                                "count": 0
                            },
                            "to": {
                                "count": data
                            }
                        };
                        $(props.from).animate(props.to, {
                            duration: 1000 * 1,
                            step: function(now, fx) {
                                $(el).text(Math.ceil(now));
                            },
                            complete: function() {
                                if (el.dataset.sym !== undefined) {
                                    el.textContent = el.textContent.concat(el.dataset.sym)
                                }
                            }
                        });
                    });
                };

                var reset = function reset() {
                    console.log($(this).scrollTop())
                    if ($(this).scrollTop() > 90) {
                        $(this).off("scroll");
                        fx()
                    }
                };

                $(window).on("scroll", reset);
            });
        });




        /* Demo purposes only */
        $(".hover").mouseleave(
            function() {
                $(this).removeClass("hover");
            }
        );



        $(function() {

            $('.navbar-toggle').on('click.bs.collapse', function(e) {
                if ($(this).data('label-expanded')) {
                    var $toggleLabel = $(this).find('.navbar-toggle-label')

                    if ($(this).hasClass('collapsed')) {
                        // Save current label
                        $(this).data('label-collapsed', $toggleLabel.text())
                        // Set new text
                        $toggleLabel.text($(this).data('label-expanded'))
                    } else {
                        $toggleLabel.text($(this).data('label-collapsed'))
                    }
                }
            })

        });




        $(document).ready(function() {

            $('.navbar-toggle').click(function(e) {
                e.preventDefault();
                $('.navbar-toggle').toggleClass('toggled');
                $('.menu-overlay').fadeToggle("slow", "swing");
            });

            $('.menu-overlay').click(function(event) {
                $('.navbar-toggle').removeClass('toggled');
                $(".navbar-toggle").trigger("click");
                $('.menu-overlay').fadeOut('slow');
            });

        });
        
        
        
        
        var showErrorSuccess = function(element, status) {
  if (status === false) {
    element.parent().next().removeClass('hidden').parent().addClass('has-error');
    return false;
  }
  element.parent().next().addClass('hidden').parent().removeClass('has-error').addClass('has-success');
};

var validate = function() {
  event.preventDefault();
  //validate name
  var name = $('#nome').val();
  if (name.length < 3) {
    return showErrorSuccess($('#nome'), false);
  }
  showErrorSuccess($('#nome'));

  /*var lastname = $('#lastname').val();
  if (lastname.length < 3) {
    return showErrorSuccess($('#lastname'), false);
  }
  showErrorSuccess($('#lastname'));*/

  //validate email
  var email = $('#email').val(),
    emailReg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/
  if (!emailReg.test(email) || email == '') {
    return showErrorSuccess($('#email'), false);
  }
  showErrorSuccess($('#email'));

  //validate telefone
  var telefone = $('#telefone').val(),
    intRegex = /[0-9 -()+]+$/;
  if ((telefone.length < 6) || (!intRegex.test(telefone))) {
    return showErrorSuccess($('#telefone'), false);
  }
  showErrorSuccess($('#telefone'));
};
        
       
        
        $(document).ready(function(){
  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
  };

  $('#telefone').mask(SPMaskBehavior, spOptions);
});
    </script>



</body>

</html>