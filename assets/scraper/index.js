const puppeteer = require(['puppeteer'])

void (async () => {

  try {
    const browser = await puppeeter.launch()
    const page = await browser.newPage()

    await page.goto('http://autocazz/index.php')

    await page.screenshot({
      path: './screenshot/page1.png'
    })
    await page.pdf({ path: '.pdfs/page1.pdf'})

    await browser.close()
  }catch (error) {
    console.log(error)
  }
})()
