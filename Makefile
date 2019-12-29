
TIMES := 10000

.PHONY: test
test:
	@echo test run $(TIMES) times and new Object every time
	@php test/1.php $(TIMES)
	@echo
	@echo text new Object once and run $(TIMES) times
	@php test/2.php $(TIMES)
