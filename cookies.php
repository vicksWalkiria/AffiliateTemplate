<?php include('constants.php');?>

<script src="<?php echo $root?>js/cookieconsent.min.js"></script>
    <script>
 window.CookieConsent.init({
          
			language: {
      // Current language
      current: 'en',
      locale: {
        en: {
          barMainText: 'En <?php echo $root?> utilizamos cookies propias y de terceros. Cookies analíticas y Publicitarias. Puede informarse más sobre las cookies que  utilizamos y configurarlas en:',
          barLinkSetting: 'Configurar Cookies',
          barBtnAcceptAll: 'Aceptar cookies',
          modalMainTitle: 'Resumen de privacidad',
          modalMainText: 'En <?php echo $domain ?> utilizamos cookies propias y de terceros  para que podamos ofrecerle la mejor experiencia de usuario posible y publicidad de Google basada en sus preferencias de navegación. La información de las cookies se almacena en su navegador y realiza funciones tales como reconocerle cuando vuelves a nuestra web y facilitar la carga de las páginas con mayor rapidez. Más Información en Política de Cookies',
          modalBtnSave: 'Salvar configuración',
          modalBtnAcceptAll: 'Aceptar cookies y cerrar',
          modalAffectedSolutions: 'Affected solutions:',
          learnMore: 'Leer más',
          on: 'On',
          off: 'Off',
        }
      }
    },

		  
          categories: {
            necessary: {
              needed: true,
              wanted: true,
              checked: true,
              language: {
                locale: {
                  en: {
                    name: 'Cookies necesarias',
                    description: 'Las cookies estrictamente necesarias tiene que activarse siempre para poder conocer sus preferencias de navegación, facilitar la carga de la web y el perfecto funcionamiento del sitio.',
                  },
                  hu: {
                    name: 'Cookies de terceros',
                    description: 'Esta web utiliza Cookies de  Google Analytics para almacenar de forma anónima el número de visitas a la web y el tiempo de permanencia para facilitar las estadísticas de la web y aumentar el número de visitas al sitio. De la misma forma utilizamos cookies publicitarias de Google Adsense y otros intermediarios financieros para poder ofrecerle publicidad de forma anómina basada en sus intereses de navegación. Dejar esta cookie activa nos permite mejorar nuestra web.',
                  }
                }
              }
            },
            various: {
              needed: false,
              wanted: false,
              checked: false,
              language: {
                locale: {
                  en: {
                    name: 'Cookies de terceros',
                    description: 'Esta web utiliza Cookies de  Google Analytics para almacenar de forma anónima el número de visitas a la web y el tiempo de permanencia para facilitar las estadísticas de la web y aumentar el número de visitas al sitio. De la misma forma utilizamos cookies publicitarias de Google Adsense y otros intermediarios financieros para poder ofrecerle publicidad de forma anómina basada en sus intereses de navegación. Dejar esta cookie activa nos permite mejorar nuestra web.',
                  },
                  hu: {
                    name: 'Egyéb sütik',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu commodo est, nec gravida odio. Suspendisse scelerisque a ex nec semper.',
                  }
                }
              }
            }
          },
          services: {
            facebook: {
              category: 'various',
              type: 'dynamic-script', // dynamic-script, script-tag, wrapped, localcookie
              search: 'facebook',
              language: {
                locale: {
                  en: {
                    name: 'Facebook'
                  },
                  hu: {
                    name: 'Facebook'
                  }
                }
              }
            },
            azalead: {
              category: 'various',
              type: 'script-tag',
              search: 'azalead',
              language: {
                locale: {
                  en: {
                    name: 'Google'
                  },
                  hu: {
                    name: 'Google'
                  }
                }
              }
            },
            wrapped: {
              category: 'various',
              type: 'wrapped',
              search: 'wrapped',
              language: {
                locale: {
                  en: {
                    name: 'Wrapped'
                  },
                  hu: {
                    name: 'Csomagolt süti'
                  }
                }
              }
            },
            localcookie: {
              category: 'various',
              type: 'localcookie',
              search: 'localcookie',
              language: {
                locale: {
                  en: {
                    name: 'Cookies Locales'
                  },
                  hu: {
                    name: 'Cookies Locales'
                  }
                }
              }
            }
          }
        });
      </script>
