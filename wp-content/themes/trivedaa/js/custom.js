
/* ----------------------------------------------------------------

[ Custom settings ]

01. ScrollIt
02. Navbar scrolling background
03. Close navbar-collapse when a  clicked
04. Sections background image from data background 
05. Isotope active
06. Animations
07. YouTubePopUp
08. Testimonials owlCarousel
09. Projects owlCarousel
10. Project Page owlCarousel - NEW
11. Blog owlCarousel
12. Team owlCarousel
13. Clients owlCarousel
14. Services owlCarousel
15. Team owlCarousel
16. MagnificPopup (Image, Youtube, Vimeo and custom popup)
17. Scroll back to top
18. Slider
19. Accordion Box
20. Preloader
21. Contact Form
22. Grid Background

------------------------------------------------------------------- */

jQuery(document).ready(function($) {
    "use strict";
    
    // Preloader
	$("#preloader").fadeOut(700);
	$(".preloader-bg").delay(600).fadeOut(700);
    
    var wind = $(window);

    // ScrollIt
    $.scrollIt({
      upKey: 38,                // key code to navigate to the next section
      downKey: 40,              // key code to navigate to the previous section
      easing: 'swing',          // the easing function for animation
      scrollTime: 600,          // how long (in ms) the animation takes
      activeClass: 'active',    // class given to the active nav element
      onPageChange: null,       // function(pageIndex) that is called when page is changed
      topOffset: -70            // offste (in px) for fixed top navigation
    });
    
    // Navbar scrolling background
    wind.on("scroll", function () {
        var bodyScroll = wind.scrollTop(),
            navbar = $(".navbar"),
            logo = $(".navbar .logo> img");
        if (bodyScroll > 100) {
            navbar.addClass("nav-scroll");
            logo.attr('src', 'img/logo.png');
        } else {
            navbar.removeClass("nav-scroll");
            logo.attr('src', 'img/logo.png');
        }
		 var bodyScroll = wind.scrollTop(),
            navbarbottom = $(".navbar-bottom"),
            logo = $(".navbar-bottom .logo> img");
        if (bodyScroll > 800) {
            navbarbottom.addClass("nav-scroll-bottom");
        } else {
            navbarbottom.removeClass("nav-scroll-bottom");
        }
    });
    // close navbar-collapse when a  clicked
    $(".navbar-nav .dropdown-item a").on('click', function () {
        $(".navbar-collapse").removeClass("show");
    });
    
    // Sections background image from data background
    var pageSection = $(".bg-img, section");
    pageSection.each(function(indx){
        if ($(this).attr("data-background")){
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });
    
    // Isotope Active
	$('.bauen-project-items').imagesLoaded(function () {
		// Add isotope on click filter function
		$('.bauen-project-filter li').on('click', function () {
			$(".bauen-project-filter li").removeClass("active");
			$(this).addClass("active");
			var selector = $(this).attr('data-filter');
			$(".bauen-project-items").isotope({
				filter: selector
				, animationOptions: {
					duration: 750
					, easing: 'linear'
					, queue: false
				, }
			});
			return false;
		});
		$(".bauen-project-items").isotope({
			itemSelector: '.single-item'
			, layoutMode: 'masonry'
		, });
	});
    
    // Isotope Active Masonry Gallery
	$('.bauen-gallery-items').imagesLoaded(function () {
		// Add isotope on click filter function
		$('.bauen-gallery-filter li').on('click', function () {
			$(".bauen-gallery-filter li").removeClass("active");
			$(this).addClass("active");
			var selector = $(this).attr('data-filter');
			$(".bauen-gallery-items").isotope({
				filter: selector
				, animationOptions: {
					duration: 750
					, easing: 'linear'
					, queue: false
				, }
			});
			return false;
		});
		$(".bauen-gallery-items").isotope({
			itemSelector: '.single-item'
			, layoutMode: 'masonry'
		, });
	});

    // Animations
    var contentWayPoint = function () {
        var i = 0;
        $('.animate-box').waypoint(function (direction) {
            if (direction === 'down' && !$(this.element).hasClass('animated')) {
                i++;
                $(this.element).addClass('item-animate');
                setTimeout(function () {
                    $('body .animate-box.item-animate').each(function (k) {
                        var el = $(this);
                        setTimeout(function () {
                            var effect = el.data('animate-effect');
                            if (effect === 'fadeIn') {
                                el.addClass('fadeIn animated');
                            }
                            else if (effect === 'fadeInLeft') {
                                el.addClass('fadeInLeft animated');
                            }
                            else if (effect === 'fadeInRight') {
                                el.addClass('fadeInRight animated');
                            }
                            else {
                                el.addClass('fadeInUp animated');
                            }
                            el.removeClass('item-animate');
                        }, k * 200, 'easeInOutExpo');
                    });
                }, 100);
            }
        }, {
            offset: '85%'
        });
    };
    $(function () {
        contentWayPoint();
    });
    
    // YouTubePopUp
    // $("a.vid").YouTubePopUp();
    
    // Testimonials owlCarousel
    $('.testimonials .owl-carousel').owlCarousel({
        loop:true,
        margin: 30,
        mouseDrag:true,
        autoplay: false,
        dots: true,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>","<span class='lnr ti-angle-right'></span>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    
    // Projects owlCarousel
    $('.projects .owl-carousel').owlCarousel({
        loop: true
        , margin: 30
        , mouseDrag: true
        , autoplay: false
        , dots: true
        , autoplayHoverPause:true
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
            , }
            , 600: {
                items: 2
            }
            , 1000: {
                items: 2
            }
        }
    });
    
    // Project Page owlCarousel
    $('.project-page .owl-carousel').owlCarousel({
        loop: true
        , margin: 30
        , mouseDrag: true
        , autoplay: false
        , dots: false
        , nav: true
        , navText: ['<i class="ti-arrow-left" aria-hidden="true"></i>', '<i class="ti-arrow-right" aria-hidden="true"></i>']
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
            , }
            , 600: {
                items: 1
            }
            , 1000: {
                items: 1
            }
        }
    });
    
    
    // Blog owlCarousel
    $('.bauen-blog .owl-carousel').owlCarousel({
        loop: true
        , margin: 30
        , mouseDrag: true
        , autoplay: false
        , dots: true
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
            , }
            , 600: {
                items: 2
            }
            , 1000: {
                items: 2
            }
        }
    });

    // Team owlCarousel
    $('.team .owl-carousel').owlCarousel({
        loop: true
        , margin: 30
        , dots: true
        , mouseDrag: true
        , autoplay: false
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1,
                dots: true
            }
            , 600: {
                items: 2
            }
            , 1000: {
                items: 3
            }
        }
    });
    
    // Clients owlCarousel
    $('.clients .owl-carousel').owlCarousel({
        loop: true
        , margin: 30
        , mouseDrag: true
        , autoplay: true
        , dots: false
        , responsiveClass: true
        , responsive: {
            0: {
                margin: 10
                , items: 3
            }
            , 600: {
                items: 3
            }
            , 1000: {
                items: 5
            }
        }
    });
    
    // MagnificPopup
    $(".img-zoom").magnificPopup({
        type: "image"
        , closeOnContentClick: !0
        , mainClass: "mfp-fade"
        , gallery: {
            enabled: !0
            , navigateByImgClick: !0
            , preload: [0, 1]
        }
    })
    $('.magnific-youtube, .magnific-vimeo, .magnific-custom').magnificPopup({
        disableOn: 700
        , type: 'iframe'
        , mainClass: 'mfp-fade'
        , removalDelay: 300
        , preloader: false
        , fixedContentPos: false
    });
    
    //  Scroll back to top
    var progressPath = document.querySelector('.progress-wrap path');
    // console.log(progressPath); 
    if (progressPath) {
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
        var updateProgress = function () {
            var scroll = $(window).scrollTop();
            var height = $(document).height() - $(window).height();
            var progress = pathLength - (scroll * pathLength / height);
            progressPath.style.strokeDashoffset = progress;
        }
        updateProgress();
        $(window).scroll(updateProgress);
        var offset = 150;
        var duration = 550;
        jQuery(window).on('scroll', function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.progress-wrap').addClass('active-progress');
            } else {
                jQuery('.progress-wrap').removeClass('active-progress');
            }
        });
        jQuery('.progress-wrap').on('click', function (event) {
            event.preventDefault();
            jQuery('html, body').animate({ scrollTop: 0 }, duration);
            return false;
        })
    }  
});

// Slider 
jQuery(document).ready(function($) {
    var owl = $('.header .owl-carousel');
    // Slider owlCarousel
    $('.slider .owl-carousel').owlCarousel({
        items: 1,
        loop:true,
        dots: false,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 5000,
         nav: true,
         navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>']
    });
    // Slider owlCarousel
    $('.slider-fade .owl-carousel').owlCarousel({
        items: 1,
        loop:true,
        dots: false,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        nav: true,
        navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>']
    });
    owl.on('changed.owl.carousel', function(event) {
        var item = event.item.index - 2;     // Position of the current item
        $('h4').removeClass('animated fadeInUp');
        $('h1').removeClass('animated fadeInUp');
        $('p').removeClass('animated fadeInUp');
        $('.butn-light').removeClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('h4').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.butn-light').addClass('animated fadeInUp');
    });
});

// Accordion Box
jQuery(document).ready(function($) {
if ($(".accordion-box").length) {
    $(".accordion-box").on("click", ".acc-btn", function () {
      var outerBox = $(this).parents(".accordion-box");
      var target = $(this).parents(".accordion");

      if ($(this).next(".acc-content").is(":visible")) {
        //return false;
        $(this).removeClass("active");
        $(this).next(".acc-content").slideUp(300);
        $(outerBox).children(".accordion").removeClass("active-block");
      } else {
        $(outerBox).find(".accordion .acc-btn").removeClass("active");
        $(this).addClass("active");
        $(outerBox).children(".accordion").removeClass("active-block");
        $(outerBox).find(".accordion").children(".acc-content").slideUp(300);
        target.addClass("active-block");
        $(this).next(".acc-content").slideDown(300);
      }
    });
  }
});



// Contact Form
jQuery.noConflict();
jQuery(document).ready(function($) {
    var form = $('.contact__form'),
        message = $('.contact__msg'),
        form_data;
        // success function
        function done_func(response) {
            message.fadeIn().removeClass('alert-danger').addClass('alert-success');
            message.text(response);
            setTimeout(function () {
                message.fadeOut();
            }, 2000);
            form.find('input:not([type="submit"]), textarea').val('');
        }
        // fail function
        function fail_func(data) {
        message.fadeIn().removeClass('alert-success').addClass('alert-success');
        message.text(data.responseText);
        setTimeout(function () {
            message.fadeOut();
        }, 2000);
    }
    form.submit(function (e) {
        e.preventDefault();
        form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form_data
        })
        .done(done_func)
        .fail(fail_func);
    });
});
    
// Slider Grid Background
  (function () {
    var imageElements = document.querySelectorAll('.grid-img');
    var itemElements = document.querySelectorAll('.grid-con');
    if (itemElements.length) {
      itemElements.forEach(function (item, index) {
        item.addEventListener('mouseenter', function () {
          imageElements.forEach(function (image) {
            image.classList.remove('grid-img-active');
          });
          itemElements.forEach(function (card) {
            card.classList.remove('grid-con-active');
          });
          item.classList.add('grid-con-active');
          imageElements[index].classList.add('grid-img-active');
        });
      });
    }
  })();

// Slider Grid Background owlCarousel *
jQuery(document).ready(function($) {
    $('.slider-grid-bg .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: false,
        dots: true,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                dots: true,
                nav: false
            },
            600: {
                items: 2,
                dots: true,
                nav: false
            },
            1000: {
                items: 3
            }
        }
    });
});

//Emi Calculator js
var pieChartInstance = null;
var barChartInstance = null;

function calculateEMI() {
    var principal = parseFloat(document.getElementById('principal').value) || 0;
    var rate = parseFloat(document.getElementById('rate').value) || 0;
    var time = parseFloat(document.getElementById('time').value) || 0;
    var startDate = new Date(document.getElementById('startDate').value);

    if (!startDate.getTime()) {
        startDate = new Date(); // Default to current date if invalid date
    }

    var monthlyRate = rate / (12 * 100);
    var timeInMonths = time * 12;
    var emi = (principal * monthlyRate * Math.pow(1 + monthlyRate, timeInMonths)) / (Math.pow(1 + monthlyRate, timeInMonths) - 1);
    var totalPayment = emi * timeInMonths;
    var totalInterest = totalPayment - principal;

    document.getElementById('emiMonthly').innerText = emi.toFixed(2);
    document.getElementById('totalInterest').innerText = totalInterest.toFixed(2);
    document.getElementById('totalPayment').innerText = totalPayment.toFixed(2);

    // Update Progress Bars
    document.getElementById('principalProgress').style.width = (principal / 10000000 * 100) + '%';
    document.getElementById('rateProgress').style.width = (rate / 20 * 100) + '%';
    document.getElementById('timeProgress').style.width = (time / 30 * 100) + '%';

    // Pie Chart
    var ctxPie = document.getElementById('emiPieChart').getContext('2d');
    if (pieChartInstance) {
        pieChartInstance.destroy(); // Destroy existing pie chart
    }
    pieChartInstance = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['Principal Loan Amount', 'Total Interest'],
            datasets: [{
                data: [principal, totalInterest],
                backgroundColor: ['#4caf50', '#ff9800']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: '#fff'
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            var dataset = tooltipItem.dataset;
                            var total = dataset.data.reduce((a, b) => a + b, 0);
                            var currentValue = dataset.data[tooltipItem.dataIndex];
                            var percentage = ((currentValue / total) * 100).toFixed(2) + '%';
                        }
                    }
                },
                datalabels: {
                    formatter: function(value, context) {
                        var total = context.chart._metasets[0].total;
                        var percentage = (value / total * 100).toFixed(2) + '%';
                        return percentage;
                    },
                    color: '#fff',
                    font: {
                        weight: 'bold'
                    }
                }
            }
        }
    });

    // Bar Chart
    var years = [];
    var principalPayments = [];
    var interestPayments = [];
    var remainingBalances = [];
    var totalPayments = [];
    var barCtx = document.getElementById('emiBarChart').getContext('2d');
    if (barChartInstance) {
        barChartInstance.destroy(); // Destroy existing bar chart
    }
    for (var i = 0; i < time; i++) {
        years.push(new Date(startDate.getFullYear() + i, 0, 1).getFullYear());
        principalPayments.push(0);
        interestPayments.push(0);
        remainingBalances.push(principal);
        totalPayments.push(0);
    }
    var balance = principal;
    var totalPrincipalPaid = 0;
    var totalInterestPaid = 0;

    for (var i = 0; i < timeInMonths; i++) {
        var interestPayment = balance * monthlyRate;
        var principalPayment = emi - interestPayment;
        balance -= principalPayment;
        var yearIndex = Math.floor(i / 12);
        principalPayments[yearIndex] += principalPayment;
        interestPayments[yearIndex] += interestPayment;
        remainingBalances[yearIndex] = balance;
        totalPayments[yearIndex] = principalPayments[yearIndex] + interestPayments[yearIndex];
        totalPrincipalPaid += principalPayment;
        totalInterestPaid += interestPayment;
        if (balance < 0) {
            break;
        }
    }

    barChartInstance = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: years,
            datasets: [
                {
                    label: 'Principal Paid',
                    data: principalPayments,
                    backgroundColor: '#4caf50',
                    stack: 'stack1'
                },
                {
                    label: 'Interest Paid',
                    data: interestPayments,
                    backgroundColor: '#ff9800',
                    stack: 'stack1'
                },
                {
                    label: 'Remaining Balance',
                    data: remainingBalances,
                    type: 'line',
                    tension: 0.1,
                    borderWidth: 2,
                    borderColor: '#2196f3',
                    fill: false,
                    stack: false
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: '#fff'
                    }
                },
                tooltip: {
                    callbacks: {
                        title: function(tooltipItem) {
                            return 'Year: ' + tooltipItem[0].label;
                        },
                        label: function(tooltipItem) {
                            var datasetLabel = tooltipItem.dataset.label || '';
                            var dataIndex = tooltipItem.dataIndex;
                            var total = totalPayments[dataIndex];
                            return datasetLabel + ': ₹ ' + tooltipItem.raw.toFixed(2) + '\nTotal Payment: ₹ ' + total.toFixed(2);
                        }
                    },
                    backgroundColor: '#333',
                    titleColor: '#fff',
                    bodyColor: '#fff'
                }
            },
            scales: {
                x: {
                    stacked: true,
                    title: {
                        display: true,
                        text: 'Year',
                        color: '#fff'
                    },
                    ticks: {
                        color: '#fff'
                    },
                    grid:{
                        color:'#444'
                    }
                },
                y: {
                    stacked: true,
                    title: {
                        display: true,
                        text: 'Amount (₹)',
                        color: '#fff'
                    },
                    ticks: {
                        color:'#fff',
                        callback: function(value) {
                            return '₹' + value.toFixed(2);
                        }
                    },
                    grid: {
                        color: '#444',
                    },
                }
            },
        }
    });

    // EMI Payment Schedule Accordion
    var emiDate = new Date(startDate);
    var scheduleHtml = '';
    totalPrincipalPaid = 0;
    totalInterestPaid = 0;
    balance = principal;
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var yearlyTotals = {};

    for (var i = 0; i < timeInMonths; i++) {
        var interestPayment = balance * monthlyRate;
        var principalPayment = emi - interestPayment;
        balance -= principalPayment;
        totalPrincipalPaid += principalPayment;
        totalInterestPaid += interestPayment;
        var month = monthNames[i % 12];
        var year = new Date(startDate.getFullYear() + Math.floor(i / 12), 0, 1).getFullYear();
        var totalPayment = principalPayment + interestPayment;
        var loanPaidPercentage = ((totalPrincipalPaid / principal) * 100).toFixed(2);

        if (!yearlyTotals[year]) {
            yearlyTotals[year] = {
                principal: 0,
                interest: 0,
                total: 0
            };
        }

        yearlyTotals[year].principal += principalPayment;
        yearlyTotals[year].interest += interestPayment;
        yearlyTotals[year].total += totalPayment;

        if (i % 12 === 0) {
            if (scheduleHtml !== '') {
                scheduleHtml += '</table></div></div>'; // Close previous year’s accordion item
            }
            scheduleHtml += '<div class="accordion-item"><div class="accordion-header"> ' + year + '</div><div class="accordion-content"><table><tr><th>Month</th><th>Principal (₹)</th><th>Interest (₹)</th><th>Total Payment (₹)</th><th>Balance (₹)</th><th>Loan Paid (%)</th></tr>';
        }

        scheduleHtml += '<tr><td>' + month + '</td><td>' + principalPayment.toFixed(2) + '</td><td>' + interestPayment.toFixed(2) + '</td><td>' + totalPayment.toFixed(2) + '</td><td>' + (balance < 0 ? 0 : balance.toFixed(2)) + '</td><td>' + loanPaidPercentage + '%</td></tr>';

        if (balance < 0) {
            break;
        }
    }
    scheduleHtml += '</table></div></div>';

    // Add year-wise totals
    scheduleHtml += '<div class="accordion-item"><div class="accordion-header">Yearly Totals</div><div class="accordion-content"><table><tr><th>Year</th><th>Total Principal (₹)</th><th>Total Interest (₹)</th><th>Total Payment (₹)</th></tr>';
    for (var year in yearlyTotals) {
        scheduleHtml += '<tr><td>' + year + '</td><td>' + yearlyTotals[year].principal.toFixed(2) + '</td><td>' + yearlyTotals[year].interest.toFixed(2) + '</td><td>' + yearlyTotals[year].total.toFixed(2) + '</td></tr>';
    }
    scheduleHtml += '</table></div></div>'; // Close yearly totals accordion item

    document.getElementById('scheduleAccordion').innerHTML = scheduleHtml;

    // Accordion functionality
    var accHeaders = document.getElementsByClassName("accordion-header");
    for (var i = 0; i < accHeaders.length; i++) {
        accHeaders[i].addEventListener("click", function() {
            // Close all other accordion items
            for (var j = 0; j < accHeaders.length; j++) {
                if (accHeaders[j] !== this) {
                    accHeaders[j].classList.remove("active");
                    accHeaders[j].nextElementSibling.style.display = "none";
                }
            }

            // Toggle the clicked accordion item
            this.classList.toggle("active");
            var accContent = this.nextElementSibling;
            if (accContent.style.display === "block") {
                accContent.style.display = "none";
            } else {
                accContent.style.display = "block";
            }
        });
    }

    // Open the first accordion section by default
    if (accHeaders.length > 0) {
        accHeaders[0].classList.add("active");
        var firstAccContent = accHeaders[0].nextElementSibling;
        if (firstAccContent) {
            firstAccContent.style.display = "block";
        }
    }
}

// Initial calculation with default values
document.addEventListener('DOMContentLoaded', function() {
    calculateEMI();
});