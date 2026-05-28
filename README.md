# 🌌 Descubra seu Signo (Zodiac Sign Finder)

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![XML](https://img.shields.io/badge/XML-006600?style=for-the-badge&logo=xml&logoColor=white)

Uma aplicação web elegante e responsiva para descobrir o signo zodiacal do usuário a partir da data de nascimento. Desenvolvida com foco em **Clean Code** e separação de responsabilidades (Front-end e Back-end).

## 📌 Sobre o Projeto

Este projeto foi desenvolvido como atividade prática para a disciplina de Programação Web. O sistema recebe a data de nascimento do usuário através de um formulário `POST`, processa a informação no back-end em PHP manipulando um banco de dados em `XML`, e retorna o signo correspondente junto com suas características principais.

A interface de usuário (UI) foi projetada com uma estética moderna utilizando **Glassmorphism**, fundos dinâmicos em gradiente e tipografia do Google Fonts.

## ✨ Funcionalidades

- 📅 **Validação de Data:** Conversão e formatação dinâmica de datas para isolar o mês e o dia da entrada do usuário.
- 🔄 **Lógica de Intervalos:** Algoritmo preparado para lidar com signos que cruzam a virada do ano (ex: Capricórnio).
- 🗂️ **Leitura de XML:** Consumo e iteração de dados estruturados utilizando a função `simplexml_load_file()` do PHP.
- 🎨 **Design Moderno:** Interface translúcida (Glassmorphism) com gradiente roxo oscilante e animações suaves (CSS puro + Bootstrap 5).

## 📂 Estrutura de Diretórios

```text
📦 Project
 ┣ 📂 assets
 ┃ ┣ 📂 css
 ┃ ┃ ┗ 📜 style.css       # Estilos personalizados e animações Glassmorphism
 ┃ ┣ 📂 imgs              # Ícones e logos dos signos
 ┃ ┗ 📂 js
 ┣ 📂 layouts
 ┃ ┗ 📜 header.php        # Cabeçalho padrão (Head, Bootstrap, Fonts)
 ┣ 📜 index.php           # Página inicial com formulário de consulta
 ┣ 📜 show_zodiac_sign.php # Lógica de processamento e página de resultado
 ┗ 📜 signos.xml          # Base de dados estruturada dos signos
```
