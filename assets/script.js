$(function() {
    //Adding Respective panel    
    let h = document.getElementById('inbox')
    loadFile(h, 'message.php', "pan")
    let mess = document.getElementById('mes')
    loadFile(mess, 'message.php', "pan")
    let p = document.getElementById('regc')
    loadFile(p, 'register.php', "pan")
    let fn = document.getElementById('stuff')
    loadFile(fn, 'staff.php', "pan")
    let pay = document.getElementById('payHist')
    loadFile(pay, 'payHistory.php', "pan")
    let acc = document.getElementById('acc')
    loadFile(acc, 'account.php', "pan")
    let con = document.getElementById('con')
    loadFile(con, 'contact.php', "pan")
    let pym = document.getElementById('pay')
    loadFile(pym, 'payment.php', "pan")
    let stat = document.getElementById('st')
    loadFile(stat, 'stats.php', "pan")
    let nam = document.getElementById('nam2')
    loadFile(nam, 'account.php', "pan")

    function loadFile(ref, url, cont) {
        ref.addEventListener('click', function(event) {
            event.preventDefault()
            var xhttp = new XMLHttpRequest()
            xhttp.open('GET', url, true)

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    document.getElementById(cont).innerHTML = data
                }
            }
            xhttp.send()
        })
    }


    function loginFile(ref, url) {
        ref.addEventListener('click', function(event) {
            event.preventDefault()
            var xhttp = new XMLHttpRequest()
            xhttp.open('GET', url, true)

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    document.getElementById("main").innerHTML = data
                    $("#navR").hide();
                }
            }
            xhttp.send()
        })
    }


    $('.button-checkbox').each(function() {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function() {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function() {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            } else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});