# LCB_BodyClass

Add language, browser name, logged info and currency class to Magento body

## Append further custom classes with own observer

```
<frontend>
    <events>
        <add_body_class>
            <observers>
                <add_body_class_handle>
                    <class>pages/observer</class>
                    <method>addCustomBodyClass</method>
                </add_body_class_handle>
            </observers>
        </add_body_class>
    </events>
</frontend>
```

```
function addCustomBodyClass(Varien_Event_Observer $observer)
{
    $observer->getBody()->getPage()->addBodyClass('custom');
}
```