<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <style>
                    #accept {
                    color:#c0f
                    }
                    #not-accept {
                    color:#f00
                    }
                    main {
                    widh4: 100%;
                    max-widh4: 800px;
                    }
                    body {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    }
                </style>
            </head>
            <body>
                <main>
                    <h2>Программисты в истории</h2>
                    <div>
                        <div>
                            <h4>Название</h4>
                            <h4>Дата</h4>
                            <h4>Содержание</h4>
                            <h4>Изображение</h4>
                        </div>
                        <h1 id="accept">Интиресные женщины проограммисты</h1>
                    </div>
                    <div>
                        <xsl:for-each select="data/content">
                            <xsl:if test="title/@access">
                                <div>
                                    <div>
                                        <h3>
                                            <xsl:value-of select="title"/>
                                        </h3>
                                    </div>
                                    <div>
                                        <xsl:value-of select="time"/>
                                    </div>
                                    <div>
                                        <xsl:value-of select="content"/>
                                    </div>
                                    <div>
                                        <img src="{image}" height="108"/>
                                    </div>
                                </div>
                            </xsl:if>
                        </xsl:for-each>
                        <div valign="center" align="center">
                            <div colspan="4">
                                <h1 id="not-accept">Интиресные мужчины в программировании</h1>
                            </div>
                        </div>
                        <xsl:for-each select="data/content">
                            <xsl:if test="not(title/@access)">
                                <div>
                                    <div>
                                        <h3>
                                            <xsl:value-of select="title"/>
                                        </h3>
                                    </div>
                                    <div>
                                        <xsl:value-of select="time"/>
                                    </div>
                                    <div>
                                        <xsl:value-of select="content"/>
                                    </div>
                                    <div>
                                        <img src="{image}" height="108"/>
                                    </div>
                                </div>
                            </xsl:if>
                        </xsl:for-each>
                    </div>
                </main>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
