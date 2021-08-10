# TYPO3 Extension `gind-bootstrap`

## 1 Features

* Based on extbase & fluid, implementing best practices from TYPO3 CMS
* Supports editors & authors by providing
    * well structured plugins with good preview functionality
    * backend module with filter & search
    * Frontend template variant based on Twitter Bootstrap (v3)
* [Comprehensive documentation][1]

## 2 Usage

### 2.1 Installation

#### Installation using Composer

The recommended way to install the extension is using [Composer][2].

Run the following command within your Composer based TYPO3 project:

```
composer require gind/gind-bootstrap
```

#### Installation as extension from TYPO3 Extension Repository (TER)

Download and install the [extension][3] with the extension manager module.

### 2.2 Minimal setup

1) Include the static TypoScript of the extension. **Optional:** If your templates are based on Twitter Bootstrap, add the TWB styles as well to get optimized templates.
2) Create some news records on a sysfolder.
3) Create a plugin on a page and select at least the sysfolder as startingpoint.
