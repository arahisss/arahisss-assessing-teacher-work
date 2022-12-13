'use strict';
                var DEFAULT_COLORS1 = ['#DCDCE0', '#BCC0CD', '#9DA4B9', '#7D87A6', '#5D6B92'];
                var getTotal = function(myChart) {
                    var sum = myChart.config.data.datasets[0].data.reduce((a, b) => a + b, 0);
                    return `Total: ${sum}`;
                }
                var ctx = document.getElementById('chart1').getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [1, 2, 3, 4, 5],
                            //$data_articles = $.parseJSON(data),
                            //articles = JSON.parse(<?php //$articles ?>),
                            //data: [articles[0], articles[1], articles[2], articles[3], articles[4]],
                            //data: [a0, a1, a2, a3, a4],
                            //data: [JSON.stringify()],
                            backgroundColor: DEFAULT_COLORS1,
                            label: 'Dataset 1'
                        }],
                        labels: ['publForeign', 'publRussian', 'publVAK', 'publTranslated', 'publIF']
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            position: 'bottom',
                            labels: {
                                color: 'black',
                                boxWidth: 40,
                                boxHeight: 40,
                                padding: 20,
                            },
                        },
                        title: {
                            display: true,
                            fontSize: 20,
                            text: 'Данные о статьях'
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        plugins: {
                            doughnutlabel: {
                                labels: [
                                    {
                                        text: 'The title',
                                        font: {
                                            size: '60'
                                        }
                                    },
                                ]
                            }
                        }
                    }
                });
                ctx = document.getElementById('chart2').getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [1, 2, 3, 4, 5],
                            backgroundColor: DEFAULT_COLORS1,
                            label: 'Dataset 1'
                        }],
                        labels: ['citForeign', 'citRussian', 'citVAK', 'citTranslated', 'citIF']
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            position: 'bottom',
                            labels: {
                                color: 'black',
                                boxWidth: 40,
                                boxHeight: 40,
                                padding: 20,
                            },
                        },
                        title: {
                            display: true,
                            fontSize: 20,
                            text: 'Данные о цитированиях'
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        plugins: {
                            doughnutlabel: {
                                labels: [
                                    {
                                        text: 'This is one line of text',
                                        font: {
                                            size: '60',
                                            family: 'Arial, Helvetica, sans-serif',
                                            style: 'italic',
                                            weight: 'bold'
                                        },
                                        color: '#bc2c1a'
                                    }
                                ]
                            }
                        }
                    }
                });