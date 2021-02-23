# CONVERSOR DE XML PRA JSON

Esse repositório é uma ajuda para quem programa em alguma linguagem que não suporta a leitura e o parseamento de arquivos XML. assim você pode 

Suba o arquivo repositório no seu servidor e execute da seguinte forma

http://seulink?url=xxxxx onde xxxx é uma url em base64 para nao conflitar com a url da chamada

## Exemplo

http://seulink?url=aHR0cHM6Ly93d3cudzNzY2hvb2xzLmNvbS94bWwvc2ltcGxlLnhtbA==

ou fazer um POST com o arquivo

{"file":"<?xml version=\"1.0\" encoding=\"UTF-8\"?><breakfast_menu><food><name>Belgian Waffles</name><price>$5.95</price><description>Two of our famous Belgian Waffles with plenty of real maple syrup</description><calories>650</calories></food><food><name>Strawberry Belgian Waffles</name><price>$7.95</price><description>Light Belgian waffles covered with strawberries and whipped cream</description><calories>900</calories></food><food><name>Berry-Berry Belgian Waffles</name><price>$8.95</price><description>Light Belgian waffles covered with an assortment of fresh berries and whipped cream</description><calories>900</calories></food><food><name>French Toast</name><price>$4.50</price><description>Thick slices made from our homemade sourdough bread</description><calories>600</calories></food><food><name>Homestyle Breakfast</name><price>$6.95</price><description>Two eggs, bacon or sausage, toast, and our ever-popular hash browns</description><calories>950</calories></food></breakfast_menu>"}

