Monitor-Servidor : TP 1 y 2

Este Trabajo Practico 1 y 2 de servivios del servidor y monitor muestra información del servidor, procesador, memoria, disco etc. Los datos se actualizan en tiempo real usando Laravel Reverb, sin tener que recargar la página. (En el TP1 con polling).

1) Qué diferencia se ve en la pestaña Red entre el TP 1 (polling) y este TP?
En el TP 1 se hacían pedidos al servidor todo el tiempo para consultar si había datos nuevos. (polling) en la pestaña Red aparecían muchas peticiones cada 5 segundos.
En este TP2 se abre una conexión WebSocket y queda activa, en rirecto. Los datos llegan por esa misma conexión abierta cuando hay una actualización. 

2) Qué pasa con la vista si se detiene reverb:start? Y si se detiene schedule:work?
Si detengo reverb:start la vista sigue abierta. Pero deja de recibir las actualizaciones porque se corta la comunicación en tiempo real.
Si detengo schedule:work Reverb puede seguir funcionando, pero no se generan nuevas lecturas de métricas del servidor. 

3) Por qué PowerShell se ejecuta la misma cantidad de veces con 1 o con 30 personas mirando?
PowerShell no se ejecuta una vez por cada persona, toma una sola lectura cada cinco segundos y después manda ese mismo resultado a todos los navegadores conectados. 

4) Por qué DemoController usa una lista blanca en lugar de recibir el nombre del programa desde el navegador?
Se usa una lista blanca por seguridad, se le indica al democontroller los programas que se pueden ejecutar.

5) Qué diferencia hay entre ShouldBroadcast y ShouldBroadcastNow?
ShouldBroadcast: deja el evento en una cola para que sea enviado después. Queda en cola.
ShouldBroadcastNow: lo envía en el momento, sin hacer cola.

6) Por qué la vista de gráficos no necesitó ningún cambio en el servidor? Qué ventaja tiene haber usado un componente?
La vista de gráficos escucha el mismo canal y recibe el mismo evento. Las métricas son las mismas. El componente permite usar la misma estructura para visualizar memoria, disco y demás sin copiar todo el código varias veces. Solo cambio el título, el campo, el color y el tipo de gráfico.
